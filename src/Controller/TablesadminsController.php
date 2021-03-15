<?php
namespace App\Controller;
use App\Controller\AppController;

class TablesadminsController extends AppController
{

    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $tablesadmins = $this->paginate($this->Tablesadmins);

            $this->set(compact('tablesadmins'));
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
            $tablesadmin = $this->Tablesadmins->get($id, [
                'contain' => []
            ]);
    
            $this->set('tablesadmin', $tablesadmin);
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
            $tablesadmin = $this->Tablesadmins->newEntity();
            if ($this->request->is('post')) {
                $tablesadmin = $this->Tablesadmins->patchEntity($tablesadmin, $this->request->getData());
                if ($this->Tablesadmins->save($tablesadmin)) {
                    $this->Flash->success2(__('The tablesadmin has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The tablesadmin could not be saved. Please, try again.'));
            }
            $this->set(compact('tablesadmin'));
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
            $tablesadmin = $this->Tablesadmins->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $tablesadmin = $this->Tablesadmins->patchEntity($tablesadmin, $this->request->getData());
                if ($this->Tablesadmins->save($tablesadmin)) {
                    $this->Flash->success2(__('The tablesadmin has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The tablesadmin could not be saved. Please, try again.'));
            }
            $this->set(compact('tablesadmin'));
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
            $tablesadmin = $this->Tablesadmins->get($id);
            if ($this->Tablesadmins->delete($tablesadmin)) {
                $this->Flash->success2(__('The tablesadmin has been deleted.'));
            } else {
                $this->Flash->error2(__('The tablesadmin could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
