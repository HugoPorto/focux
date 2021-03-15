<?php
namespace App\Controller;
use App\Controller\AppController;

class TitlesController extends AppController
{
    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
        $titles = $this->paginate($this->Titles);

        $this->set(compact('titles'));
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
            $title = $this->Titles->get($id, [
                'contain' => []
            ]);    
            $this->set('title', $title);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $title = $this->Titles->newEntity();
            if ($this->request->is('post')) 
            {
                $title = $this->Titles->patchEntity($title, $this->request->getData());
                if ($this->Titles->save($title)) 
                {
                    $this->Flash->success2(__('The title has been saved.'));    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The title could not be saved. Please, try again.'));
            }
            $this->set(compact('title'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $title = $this->Titles->get($id, [
                'contain' => []
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) 
            {
                $title = $this->Titles->patchEntity($title, $this->request->getData());

                if ($this->Titles->save($title)) 
                {
                    $this->Flash->success2(__('The title has been saved.'));    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The title could not be saved. Please, try again.'));
            }
            $this->set(compact('title'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function delete($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $title = $this->Titles->get($id);

            if ($this->Titles->delete($title)) 
            {
                $this->Flash->success2(__('The title has been deleted.'));
            } 
            else
            {
                $this->Flash->error2(__('The title could not be deleted. Please, try again.'));
            }    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
