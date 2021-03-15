<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Planocontas Controller
 *
 * @property \App\Model\Table\PlanocontasTable $Planocontas
 *
 * @method \App\Model\Entity\Planoconta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlanocontasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Centroresultados']
        ];
        $planocontas = $this->paginate($this->Planocontas);

        $this->set(compact('planocontas'));
    }

    /**
     * View method
     *
     * @param string|null $id Planoconta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planoconta = $this->Planocontas->get($id, [
            'contain' => ['Centroresultados']
        ]);

        $this->set('planoconta', $planoconta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planoconta = $this->Planocontas->newEntity();
        if ($this->request->is('post')) {
            $planoconta = $this->Planocontas->patchEntity($planoconta, $this->request->getData());
            if ($this->Planocontas->save($planoconta)) {
                $this->Flash->success(__('The planoconta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planoconta could not be saved. Please, try again.'));
        }
        $centroresultados = $this->Planocontas->Centroresultados->find('list', ['limit' => 200]);
        $this->set(compact('planoconta', 'centroresultados'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Planoconta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planoconta = $this->Planocontas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planoconta = $this->Planocontas->patchEntity($planoconta, $this->request->getData());
            if ($this->Planocontas->save($planoconta)) {
                $this->Flash->success(__('The planoconta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The planoconta could not be saved. Please, try again.'));
        }
        $centroresultados = $this->Planocontas->Centroresultados->find('list', ['limit' => 200]);
        $this->set(compact('planoconta', 'centroresultados'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Planoconta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planoconta = $this->Planocontas->get($id);
        if ($this->Planocontas->delete($planoconta)) {
            $this->Flash->success(__('The planoconta has been deleted.'));
        } else {
            $this->Flash->error(__('The planoconta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
