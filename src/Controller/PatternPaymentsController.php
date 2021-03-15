<?php
namespace App\Controller;
use App\Controller\AppController;

class PatternPaymentsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('UploadVoucher');
        $this->loadComponent('Maintenance');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['PlaylistUsers', 'Users']
        ];

        $patternPayments = $this->paginate($this->PatternPayments);
        $this->set(compact('patternPayments'));
    }

    public function view($id = null)
    {
        $patternPayment = $this->PatternPayments->get($id, [
            'contain' => ['PlaylistUsers', 'Users']
        ]);

        $this->set('patternPayment', $patternPayment);
    }

    public function add($username, $idPlaylist, $ownersid)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');        
        $user = $this->Users->findByUsername($username)->firstOrFail();
        $patternPayment = $this->PatternPayments->newEntity();
        $playlistUsers = $this->PatternPayments->PlaylistUsers->find('list', ['limit' => 200]);
        $users = $this->PatternPayments->Users->find('list', ['limit' => 200]);
        $playlistId = $idPlaylist;
        $owner = $ownersid;

        if ($this->request->is('post')) 
        {
            $this->UploadVoucher->upload($this->request->data['photo'], $this->request->data, 4, $idPlaylist, $ownersid, $username);
        }
        
        $this->set(compact([
            'patternPayment', 
            'playlistUsers', 
            'users',
            'footers',
            'user',
            'categoryVideos',
            'playlistId',
            'owner',
        ]));
    }

    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $patternPayment = $this->PatternPayments->get($id, [
                'contain' => []
            ]);
            
            if ($this->request->is(['patch', 'post', 'put'])) {
                $patternPayment = $this->PatternPayments->patchEntity($patternPayment, $this->request->getData());
                if ($this->PatternPayments->save($patternPayment)) {
                    $this->Flash->success(__('The pattern payment has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The pattern payment could not be saved. Please, try again.'));
            }
    
            $playlistUsers = $this->PatternPayments->PlaylistUsers->find('list', ['limit' => 200]);
            $users = $this->PatternPayments->Users->find('list', ['limit' => 200]);
            $this->set(compact('patternPayment', 'playlistUsers', 'users'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $patternPayment = $this->PatternPayments->get($id);
            if ($this->PatternPayments->delete($patternPayment)) {
                $this->Flash->success(__('The pattern payment has been deleted.'));
            } else {
                $this->Flash->error(__('The pattern payment could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function maintenance()
    {
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }

    public function viewSendPay($username)
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
            'contain' => 
            [
                'Users',
                'PlaylistUsers',
            ]
        ];
        $patternPayments = $this->paginate($this->PatternPayments->find('all')->where(['PatternPayments.users_id =' => $user->id]));
        $update = $this->Maintenance->getUpdate();

        $this->set([
            'patternPayments' => $patternPayments,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'update' => $update
            ]);

    }

    public function viewReceivedPay($username)
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
            'contain' => 
            [
                'Users',
                'PlaylistUsers',
            ]
        ];
        $patternPayments = $this->paginate($this->PatternPayments->find('all')->where(['PatternPayments.ownersid =' => $user->id]));
        $update = $this->Maintenance->getUpdate();

        $this->set([
            'patternPayments' => $patternPayments,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'update' => $update
        ]);
    }
}
