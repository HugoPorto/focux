<?php
namespace App\Controller;
use App\Controller\AppController;

class PlaylistReportsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'PlaylistUsers']
        ];
        $playlistReports = $this->paginate($this->PlaylistReports);

        $this->set(compact('playlistReports'));
    }

    public function view($id = null)
    {
        $playlistReport = $this->PlaylistReports->get($id, [
            'contain' => ['Users', 'PlaylistUsers']
        ]);

        $this->set('playlistReport', $playlistReport);
    }

    public function add($username, $playlistid)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $user = $this->Users->findByUsername($username)->firstOrFail();

        $playlistReport = $this->PlaylistReports->newEntity();
        if ($this->request->is('post')) {
            $playlistReport = $this->PlaylistReports->patchEntity($playlistReport, $this->request->getData());
            if ($this->PlaylistReports->save($playlistReport)) {
                $this->Flash->success(__('The playlist report has been saved.'));

                return $this->redirect(['action' => 'add', $username, $playlistid]);
            }
            else
            {
                $this->Flash->error(__('The playlist report could not be saved. Please, try again.'));
            }            
        }
        
        $users = $this->PlaylistReports->Users->find('list', ['limit' => 200]);
        $playlistUsers = $this->PlaylistReports->PlaylistUsers->find('list', ['limit' => 200]);
        $idplaylist = $playlistid;
        $this->set(compact('playlistReport', 'users', 'playlistUsers', 'user', 'idplaylist'));
    }

    public function edit($id = null)
    {
        $playlistReport = $this->PlaylistReports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $playlistReport = $this->PlaylistReports->patchEntity($playlistReport, $this->request->getData());
            if ($this->PlaylistReports->save($playlistReport)) {
                $this->Flash->success(__('The playlist report has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The playlist report could not be saved. Please, try again.'));
        }
        $users = $this->PlaylistReports->Users->find('list', ['limit' => 200]);
        $playlistUsers = $this->PlaylistReports->PlaylistUsers->find('list', ['limit' => 200]);
        $this->set(compact('playlistReport', 'users', 'playlistUsers'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $playlistReport = $this->PlaylistReports->get($id);
        if ($this->PlaylistReports->delete($playlistReport)) {
            $this->Flash->success(__('The playlist report has been deleted.'));
        } else {
            $this->Flash->error(__('The playlist report could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
