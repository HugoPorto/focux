<?php
namespace App\Controller;
use App\Controller\AppController;

class RolesController extends AppController
{
    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $roles = $this->paginate($this->Roles);

            $this->set(compact('roles'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $role = $this->Roles->get($id, [
                'contain' => []
            ]);
    
            $this->set('role', $role);
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
            $role = $this->Roles->newEntity();
            if ($this->request->is('post')) {
                $role = $this->Roles->patchEntity($role, $this->request->getData());
                if ($this->Roles->save($role)) {
                    $this->Flash->success(__('The role has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The role could not be saved. Please, try again.'));
            }
            $this->set(compact('role'));
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
            $role = $this->Roles->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $role = $this->Roles->patchEntity($role, $this->request->getData());
                if ($this->Roles->save($role)) {
                    $this->Flash->success(__('The role has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The role could not be saved. Please, try again.'));
            }
            $this->set(compact('role'));
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
            $role = $this->Roles->get($id);
            if ($this->Roles->delete($role)) {
                $this->Flash->success(__('The role has been deleted.'));
            } else {
                $this->Flash->error(__('The role could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
