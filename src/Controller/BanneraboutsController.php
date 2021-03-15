<?php
namespace App\Controller;
use App\Controller\AppController;

class BanneraboutsController extends AppController
{
    public function index()
    {
        $bannerabouts = $this->paginate($this->Bannerabouts);

        $this->set(compact('bannerabouts'));
    }

    public function view($id = null)
    {
        $bannerabout = $this->Bannerabouts->get($id, [
            'contain' => []
        ]);

        $this->set('bannerabout', $bannerabout);
    }

    public function add()
    {
        $bannerabout = $this->Bannerabouts->newEntity();
        if ($this->request->is('post')) {
            $bannerabout = $this->Bannerabouts->patchEntity($bannerabout, $this->request->getData());
            if ($this->Bannerabouts->save($bannerabout)) {
                $this->Flash->success2(__('The bannerabout has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The bannerabout could not be saved. Please, try again.'));
        }
        $this->set(compact('bannerabout'));
    }

    public function edit($id = null)
    {
        $bannerabout = $this->Bannerabouts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannerabout = $this->Bannerabouts->patchEntity($bannerabout, $this->request->getData());
            if ($this->Bannerabouts->save($bannerabout)) {
                $this->Flash->success2(__('The bannerabout has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The bannerabout could not be saved. Please, try again.'));
        }
        $this->set(compact('bannerabout'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bannerabout = $this->Bannerabouts->get($id);
        if ($this->Bannerabouts->delete($bannerabout)) {
            $this->Flash->success2(__('The bannerabout has been deleted.'));
        } else {
            $this->Flash->error2(__('The bannerabout could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
