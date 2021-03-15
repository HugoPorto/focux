<?php
namespace App\Controller;
use App\Controller\AppController;

class TablestubexController extends AppController
{

    public function index()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $tablestubex = $this->paginate($this->Tablestubex);
            $this->set(compact('tablestubex'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $tablestubex = $this->Tablestubex->get($id, [
                'contain' => []
            ]);
    
            $this->set('tablestubex', $tablestubex);
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function add()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $tablestubex = $this->Tablestubex->newEntity();
            if ($this->request->is('post')) {
                $tablestubex = $this->Tablestubex->patchEntity($tablestubex, $this->request->getData());
                if ($this->Tablestubex->save($tablestubex)) {
                    $this->Flash->success(__('The tablestubex has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The tablestubex could not be saved. Please, try again.'));
            }
            $this->set(compact('tablestubex'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $tablestubex = $this->Tablestubex->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $tablestubex = $this->Tablestubex->patchEntity($tablestubex, $this->request->getData());
                if ($this->Tablestubex->save($tablestubex)) {
                    $this->Flash->success(__('The tablestubex has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The tablestubex could not be saved. Please, try again.'));
            }
            $this->set(compact('tablestubex'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $this->request->allowMethod(['post', 'delete']);
            $tablestubex = $this->Tablestubex->get($id);
            if ($this->Tablestubex->delete($tablestubex)) {
                $this->Flash->success(__('The tablestubex has been deleted.'));
            } else {
                $this->Flash->error(__('The tablestubex could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
