<?php
namespace App\Controller;
use App\Controller\AppController;
class SeansController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Animes']
        ];
        $seans = $this->paginate($this->Seans);

        $this->set(compact('seans'));
    }

    public function view($id = null)
    {
        $sean = $this->Seans->get($id, [
            'contain' => ['Animes']
        ]);

        $this->set('sean', $sean);
    }

    public function add()
    {
        $sean = $this->Seans->newEntity();
        if ($this->request->is('post')) {
            $sean = $this->Seans->patchEntity($sean, $this->request->getData());
            if ($this->Seans->save($sean)) {
                $this->Flash->success(__('The sean has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sean could not be saved. Please, try again.'));
        }
        $animes = $this->Seans->Animes->find('list', ['limit' => 200]);
        $this->set(compact('sean', 'animes'));
    }

    public function edit($id = null)
    {
        $sean = $this->Seans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sean = $this->Seans->patchEntity($sean, $this->request->getData());
            if ($this->Seans->save($sean)) {
                $this->Flash->success(__('The sean has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sean could not be saved. Please, try again.'));
        }
        $animes = $this->Seans->Animes->find('list', ['limit' => 200]);
        $this->set(compact('sean', 'animes'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sean = $this->Seans->get($id);
        if ($this->Seans->delete($sean)) {
            $this->Flash->success(__('The sean has been deleted.'));
        } else {
            $this->Flash->error(__('The sean could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
