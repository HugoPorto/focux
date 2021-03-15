<?php
namespace App\Controller;
use App\Controller\AppController;

class FootersController extends AppController
{
    public function index()
    {
        $footers = $this->paginate($this->Footers);

        $this->set(compact('footers'));
    }

    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $footer = $this->Footers->get($id, [
                'contain' => []
            ]);
    
            $this->set('footer', $footer);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $footer = $this->Footers->newEntity();
            if ($this->request->is('post')) {
                $footer = $this->Footers->patchEntity($footer, $this->request->getData());
                if ($this->Footers->save($footer)) {
                    $this->Flash->success2(__('The footer has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The footer could not be saved. Please, try again.'));
            }
            $this->set(compact('footer'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $footer = $this->Footers->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $footer = $this->Footers->patchEntity($footer, $this->request->getData());
                if ($this->Footers->save($footer)) {
                    $this->Flash->success2(__('The footer has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The footer could not be saved. Please, try again.'));
            }
            $this->set(compact('footer'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $footer = $this->Footers->get($id);
            if ($this->Footers->delete($footer)) {
                $this->Flash->success2(__('The footer has been deleted.'));
            } else {
                $this->Flash->error2(__('The footer could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
