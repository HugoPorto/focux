<?php
namespace App\Controller;
use App\Controller\AppController;

class PublicitysController extends AppController
{
    public function index()
    {
        $publicitys = $this->paginate($this->Publicitys);

        $this->set(compact('publicitys'));
    }

    public function view($id = null)
    {
        $publicity = $this->Publicitys->get($id, [
            'contain' => []
        ]);

        $this->set('publicity', $publicity);
    }

    public function add()
    {
        $publicity = $this->Publicitys->newEntity();
        if ($this->request->is('post')) {
            $publicity = $this->Publicitys->patchEntity($publicity, $this->request->getData());
            if ($this->Publicitys->save($publicity)) {
                $this->Flash->success2(__('The publicity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The publicity could not be saved. Please, try again.'));
        }
        $this->set(compact('publicity'));
    }

    public function edit($id = null)
    {
        $publicity = $this->Publicitys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicity = $this->Publicitys->patchEntity($publicity, $this->request->getData());
            if ($this->Publicitys->save($publicity)) {
                $this->Flash->success2(__('The publicity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The publicity could not be saved. Please, try again.'));
        }
        $this->set(compact('publicity'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicity = $this->Publicitys->get($id);
        if ($this->Publicitys->delete($publicity)) {
            $this->Flash->success2(__('The publicity has been deleted.'));
        } else {
            $this->Flash->error2(__('The publicity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
