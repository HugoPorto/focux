<?php
namespace App\Controller;
use App\Controller\AppController;

class VideoViewsController extends AppController
{
    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->paginate = [
                'contain' => ['Users', 'Videos']
            ];
            $videoViews = $this->paginate($this->VideoViews);
    
            $this->set(compact('videoViews'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $videoView = $this->VideoViews->get($id, [
                'contain' => ['Users', 'Videos']
            ]);
    
            $this->set('videoView', $videoView);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $videoView = $this->VideoViews->newEntity();
            if ($this->request->is('post')) {
                $videoView = $this->VideoViews->patchEntity($videoView, $this->request->getData());
                if ($this->VideoViews->save($videoView)) {
                    $this->Flash->success2(__('The video view has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The video view could not be saved. Please, try again.'));
            }
            $users = $this->VideoViews->Users->find('list', ['limit' => 200]);
            $videos = $this->VideoViews->Videos->find('list', ['limit' => 200]);
            $this->set(compact('videoView', 'users', 'videos'));
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
            $videoView = $this->VideoViews->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $videoView = $this->VideoViews->patchEntity($videoView, $this->request->getData());
                if ($this->VideoViews->save($videoView)) {
                    $this->Flash->success2(__('The video view has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The video view could not be saved. Please, try again.'));
            }
            $users = $this->VideoViews->Users->find('list', ['limit' => 200]);
            $videos = $this->VideoViews->Videos->find('list', ['limit' => 200]);
            $this->set(compact('videoView', 'users', 'videos'));
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
            $videoView = $this->VideoViews->get($id);
            if ($this->VideoViews->delete($videoView)) {
                $this->Flash->success2(__('The video view has been deleted.'));
            } else {
                $this->Flash->error2(__('The video view could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
