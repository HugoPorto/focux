<?php
namespace App\Controller;
use App\Controller\AppController;

class LogosController extends AppController
{
    public function index()
    {
        $logos = $this->paginate($this->Logos);

        $this->set(compact('logos'));
    }

    public function view($id = null)
    {
        $logo = $this->Logos->get($id, [
            'contain' => []
        ]);

        $this->set('logo', $logo);
    }

    public function add()
    {
        $logo = $this->Logos->newEntity();
        if ($this->request->is('post')) {
            $logo = $this->Logos->patchEntity($logo, $this->request->getData());
            if ($this->Logos->save($logo)) {
                $this->Flash->success(__('The logo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logo could not be saved. Please, try again.'));
        }
        $this->set(compact('logo'));
    }

    public function edit($id = null)
    {
        $logo = $this->Logos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logo = $this->Logos->patchEntity($logo, $this->request->getData());
            if ($this->Logos->save($logo)) {
                $this->Flash->success(__('The logo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logo could not be saved. Please, try again.'));
        }
        $this->set(compact('logo'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logo = $this->Logos->get($id);
        if ($this->Logos->delete($logo)) {
            $this->Flash->success(__('The logo has been deleted.'));
        } else {
            $this->Flash->error(__('The logo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
