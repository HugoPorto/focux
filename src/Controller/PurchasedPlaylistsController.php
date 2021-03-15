<?php
namespace App\Controller;
use App\Controller\AppController;

class PurchasedPlaylistsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Maintenance');
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'PlaylistUsers']
        ];
        $purchasedPlaylists = $this->paginate($this->PurchasedPlaylists);

        $this->set(compact('purchasedPlaylists'));
    }
    public function view($id = null)
    {
        $purchasedPlaylist = $this->PurchasedPlaylists->get($id, [
            'contain' => ['Users', 'PlaylistUsers']
        ]);

        $this->set('purchasedPlaylist', $purchasedPlaylist);
    }
    public function add()
    {
        $purchasedPlaylist = $this->PurchasedPlaylists->newEntity();
        if ($this->request->is('post')) {
            $purchasedPlaylist = $this->PurchasedPlaylists->patchEntity($purchasedPlaylist, $this->request->getData());
            if ($this->PurchasedPlaylists->save($purchasedPlaylist)) {
                $this->Flash->success(__('The purchased playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchased playlist could not be saved. Please, try again.'));
        }
        $users = $this->PurchasedPlaylists->Users->find('list', ['limit' => 200]);
        $playlistUsers = $this->PurchasedPlaylists->PlaylistUsers->find('list', ['limit' => 200]);
        $this->set(compact('purchasedPlaylist', 'users', 'playlistUsers'));
    }
    public function edit($id = null)
    {
        $purchasedPlaylist = $this->PurchasedPlaylists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $purchasedPlaylist = $this->PurchasedPlaylists->patchEntity($purchasedPlaylist, $this->request->getData());
            if ($this->PurchasedPlaylists->save($purchasedPlaylist)) {
                $this->Flash->success(__('The purchased playlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The purchased playlist could not be saved. Please, try again.'));
        }
        $users = $this->PurchasedPlaylists->Users->find('list', ['limit' => 200]);
        $playlistUsers = $this->PurchasedPlaylists->PlaylistUsers->find('list', ['limit' => 200]);
        $this->set(compact('purchasedPlaylist', 'users', 'playlistUsers'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $purchasedPlaylist = $this->PurchasedPlaylists->get($id);
        if ($this->PurchasedPlaylists->delete($purchasedPlaylist)) {
            $this->Flash->success(__('The purchased playlist has been deleted.'));
        } else {
            $this->Flash->error(__('The purchased playlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function viewByUser($username = null)
    {     
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $this->loadModel('PlaylistUsers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');        
        $user = $this->Users->findByUsername($username)->firstOrFail();   

        $this->paginate = [
            'contain' => ['Users', 'PlaylistUsers']
        ];

        $purchasedPlaylists = $this->paginate($this->PurchasedPlaylists->find('all')->where(['PurchasedPlaylists.users_id =' => $user->id]));
        $update = $this->Maintenance->getUpdate();

        if(sizeof($purchasedPlaylists->toArray()))
        {
            $ownerfull = $this->PlaylistUsers->find('all')->where(['PlaylistUsers.id =' => $purchasedPlaylists->toArray()[0]['playlist_users_id']]);
            $ownername = $this->Users->get($ownerfull->toArray()[0]['users_id']);
    
            $this->set([
                'purchasedPlaylists' => $purchasedPlaylists,
                'owner' => $ownername->username,
                'footers' => $footers,
                'categoryVideos' => $categoryVideos,
                'update' => $update
            ]);
        }
        else
        {
            $this->set([
                'purchasedPlaylists' => $purchasedPlaylists,
                'footers' => $footers,
                'categoryVideos' => $categoryVideos,
                'update' => $update
            ]);
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
}
