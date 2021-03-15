<?php
namespace App\Controller;
use App\Controller\AppController;

class PlaylistPricesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Maintenance');
        $this->Auth->allow(['noPlaylist']);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['PlaylistUsers', 'Users']
        ];
        $playlistPrices = $this->paginate($this->PlaylistPrices);

        $this->set(compact('playlistPrices'));
    }

    public function view($id = null)
    {
        $playlistPrice = $this->PlaylistPrices->get($id, [
            'contain' => ['PlaylistUsers', 'Users']
        ]);

        $this->set('playlistPrice', $playlistPrice);
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

        $playlistPrices = $this->paginate($this->PlaylistPrices->find('all')
        ->where(['PlaylistPrices.users_id =' => $user->id])
        ->contain(['PlaylistUsers']));
        $update = $this->Maintenance->getUpdate();
        if($username == $this->Auth->user('username'))
        {
            $usernameEdit = true;
        }
        else
        {
            $usernameEdit = false;
        }

        $this->set([
            'usernameEdit' => $usernameEdit,
            'playlistPrices' => $playlistPrices,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'update' => $update
            ]);
    }

    public function add($username)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $playlistPrice = $this->PlaylistPrices->newEntity();

        if ($this->request->is('post')) {
            $playlistPrice = $this->PlaylistPrices->patchEntity($playlistPrice, $this->request->getData());
            if ($this->PlaylistPrices->save($playlistPrice)) {
                $this->Flash->success(__('The playlist price has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlist price could not be saved. Please, try again.'));
        }

        $playlistUsers = $this->PlaylistPrices->PlaylistUsers->find('list', [
            'conditions' => ['PlaylistUsers.users_id = ' => $user->id],
            'limit' => 500
        ]);
        
        $users = $this->PlaylistPrices->Users->find('list', ['limit' => 200]);
        $this->set(compact('playlistPrice', 'playlistUsers', 'users', 'user', 'footers', 'categoryVideos'));
    }

    public function edit($id = null, $username)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $playlistPrice = $this->PlaylistPrices->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlistPrice = $this->PlaylistPrices->patchEntity($playlistPrice, $this->request->getData());
            if ($this->PlaylistPrices->save($playlistPrice)) {
                $this->Flash->success(__('The playlist price has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The playlist price could not be saved. Please, try again.'));
        }

        // $playlistUsers = $this->PlaylistPrices->PlaylistUsers->find('list', ['limit' => 200]);
        $users = $this->PlaylistPrices->Users->find('list', ['limit' => 200]);
        $playlistUsers = $this->PlaylistPrices->PlaylistUsers->find('list')->where(['PlaylistUsers.users_id =' => $user->id]);
        $this->set(compact('playlistPrice', 'playlistUsers', 'users', 'user', 'footers', 'categoryVideos'));
    }

    public function delete($id = null, $username)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlistPrice = $this->PlaylistPrices->get($id);
        if ($this->PlaylistPrices->delete($playlistPrice)) {
            $this->Flash->success(__('The playlist price has been deleted.'));
        } else {
            $this->Flash->error(__('The playlist price could not be deleted. Please, try again.'));
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
