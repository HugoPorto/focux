<?php
namespace App\Controller;
use App\Controller\AppController;

class MaintenancesController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Auth->allow('maintenance');
    }
    public function maintenance(){
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 0){
            $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $maintenances = $this->paginate($this->Maintenances);
            $this->set(compact('maintenances'));
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
            $maintenance = $this->Maintenances->get($id, [
                'contain' => []
            ]);
    
            $this->set('maintenance', $maintenance);
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
            $maintenance = $this->Maintenances->newEntity();
            if ($this->request->is('post')) {
                $maintenance = $this->Maintenances->patchEntity($maintenance, $this->request->getData());
                if ($this->Maintenances->save($maintenance)) {
                    $this->Flash->success2(__('The maintenance has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The maintenance could not be saved. Please, try again.'));
            }
            $this->set(compact('maintenance'));
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
            $maintenance = $this->Maintenances->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $maintenance = $this->Maintenances->patchEntity($maintenance, $this->request->getData());
                if ($this->Maintenances->save($maintenance)) {
                    $this->Flash->success2(__('The maintenance has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The maintenance could not be saved. Please, try again.'));
            }
            $this->set(compact('maintenance'));
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
            $maintenance = $this->Maintenances->get($id);
            if ($this->Maintenances->delete($maintenance)) {
                $this->Flash->success2(__('The maintenance has been deleted.'));
            } else {
                $this->Flash->error2(__('The maintenance could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
