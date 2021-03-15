<?php
namespace App\Controller;
use App\Controller\AppController;

class PlaylistUsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Maintenance');
        $this->Auth->allow(['noPlaylist', 'view']);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        
        $playlistUsers = $this->paginate($this->PlaylistUsers);

        $this->set(compact('playlistUsers'));
    }

    public function view($id = null, $username, $purchased = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $this->loadModel('VideosUsers');
        $this->loadModel('PaymentMethods');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');  
        $user = $this->Users->findByUsername($username)->firstOrFail();

        $paymentMethods = $this->PaymentMethods->find('all', [
            'conditions' => [
                'PaymentMethods.users_id = ' =>  $user->id
            ]
        ]);

        $playlistUser = $this->PlaylistUsers->find('all')
            ->where(
                [
                    'PlaylistUsers.users_id =' => $user->id,
                    'PlaylistUsers.id =' => $id
                ])
            ->contain(['Users'])->first();

            if($purchased)
            {
                $videosUser = $this->VideosUsers->find('all', [
                    'conditions' => [
                        'VideosUsers.users_id =' => $user->id,
                        'VideosUsers.playlist_users_id =' => $id
                    ]
                ]);
            }
            else
            {
                $videosUser = $this->VideosUsers->find('all', [
                    'conditions' => [
                        'VideosUsers.users_id =' => $user->id,
                        'VideosUsers.playlist_users_id =' => $id
                    ],
                    'limit' => 7,
                ]);
            }
           

        
        if($username == $this->Auth->user('username'))
        {
            $usernameEdit = true;
        }
        else
        {
            $usernameEdit = false;
        }

        $this->set(
            [
            'playlistUser' => $playlistUser,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'user' => $user,
            'videosUser' => $videosUser,
            'usernameEdit' => $usernameEdit,
            'paymentMethods' => $paymentMethods,
            ]);
    }

    public function noPlaylist()
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $this->set(compact('categoryVideos', 'footers'));
    }

    public function viewByUser($username = null)
    {     
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');        
        $user = $this->Users->findByUsername($username)->firstOrFail();
        $this->paginate = [
            'contain' => ['Users']
        ];
        $playlistUser = $this->paginate($this->PlaylistUsers->find('all')->where(['PlaylistUsers.users_id =' => $user->id]));
        $update = $this->Maintenance->getUpdate(); 

        $this->set([
            'playlistUser' => $playlistUser,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'update' => $update
            ]);
    }

    public function add($username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $playlistUser = $this->PlaylistUsers->newEntity();

        if ($this->request->is('post')) {
            $playlistUser = $this->PlaylistUsers->patchEntity($playlistUser, $this->request->getData());
            if ($this->PlaylistUsers->save($playlistUser)) {
                $this->Flash->success(__('The playlist user has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The playlist user could not be saved. Please, try again.'));
        }

        $users = $this->PlaylistUsers->Users->find('list', ['limit' => 200]);
        // $playlistId = $idPlaylist;

        $this->set(compact(
            [
            'playlistUser', 
            'users', 
            'user', 
            'footers', 
            'categoryVideos',
            // 'playlistId'
        ]));
    }

    public function edit($id = null, $username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $playlistUser = $this->PlaylistUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlistUser = $this->PlaylistUsers->patchEntity($playlistUser, $this->request->getData());
            if ($this->PlaylistUsers->save($playlistUser)) {
                $this->Flash->success(__('The playlist user has been saved.'));

                return $this->redirect(['action' => 'view', $playlistUser->id, $username]);
            }
            $this->Flash->error(__('The playlist user could not be saved. Please, try again.'));
        }
        $users = $this->PlaylistUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('playlistUser', 'users', 'user', 'footers', 'categoryVideos'));
    }

    public function delete($id = null, $username = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlistUser = $this->PlaylistUsers->get($id);
        if ($this->PlaylistUsers->delete($playlistUser)) {
            $this->Flash->success(__('The playlist user has been deleted.'));
        } else {
            $this->Flash->error(__('The playlist user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'viewByUser', $username]);
    }
    
    public function maintenance()
    {
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }
}
