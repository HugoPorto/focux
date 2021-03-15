<?php
namespace App\Controller;

use App\Controller\AppController;

class DownloadsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(
            [
                'viewByVideos'
            ]);
    }

    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->paginate = [
                'contain' => ['Users', 'Videos', 'Shorteners']
            ];
            $downloads = $this->paginate($this->Downloads);

            $this->set(compact('downloads'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $download = $this->Downloads->get($id, [
                'contain' => ['Users', 'Videos', 'Shorteners']
            ]);

            $this->set('download', $download);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function viewByVideos($id = null)
    {
        $this->viewBuilder()->setLayout('adminlte_videos_downloads');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $download = $this->Downloads->findByVideosId($id, [
            'contain' => ['Users', 'Videos', 'Shorteners']
        ])->first();

        if($download)
        {
            $this->set(
                [
                    'download' => $download,
                    'footers' => $footers,
                    'categoryVideos' => $categoryVideos
                ]);
        }
        else
        {
            $this->set(
                [
                    'download' => '',
                    'footers' => $footers,
                    'categoryVideos' => $categoryVideos
                ]);

        }
    }

    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $download = $this->Downloads->newEntity();
            if ($this->request->is('post')) {
                $download = $this->Downloads->patchEntity($download, $this->request->getData());
                if ($this->Downloads->save($download)) {
                    $this->Flash->success(__('The download has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The download could not be saved. Please, try again.'));
            }
            $users = $this->Downloads->Users->find('list', ['limit' => 200]);
            $videos = $this->Downloads->Videos->find('list');
            $shorteners = $this->Downloads->Shorteners->find('list', ['limit' => 200]);
            $this->set(compact('download', 'users', 'videos', 'shorteners'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $download = $this->Downloads->get($id, [
                'contain' => []
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $download = $this->Downloads->patchEntity($download, $this->request->getData());
                if ($this->Downloads->save($download)) {
                    $this->Flash->success(__('The download has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The download could not be saved. Please, try again.'));
            }
            
            $users = $this->Downloads->Users->find('list', ['limit' => 200]);
            $videos = $this->Downloads->Videos->find('list');
            $shorteners = $this->Downloads->Shorteners->find('list', ['limit' => 200]);
            $this->set(compact('download', 'users', 'videos', 'shorteners'));
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
            $download = $this->Downloads->get($id);
            if ($this->Downloads->delete($download)) {
                $this->Flash->success(__('The download has been deleted.'));
            } else {
                $this->Flash->error(__('The download could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
