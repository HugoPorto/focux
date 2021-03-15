<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Demands Controller
 *
 * @property \App\Model\Table\DemandsTable $Demands
 *
 * @method \App\Model\Entity\Demand[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Products']
        ];
        $demands = $this->paginate($this->Demands);

        $this->set(compact('demands'));
    }

    /**
     * View method
     *
     * @param string|null $id Demand id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demand = $this->Demands->get($id, [
            'contain' => ['Clients', 'Products']
        ]);

        $this->set('demand', $demand);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demand = $this->Demands->newEntity();
        if ($this->request->is('post')) {
            $demand = $this->Demands->patchEntity($demand, $this->request->getData());
            if ($this->Demands->save($demand)) {
                $this->Flash->success(__('The demand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demand could not be saved. Please, try again.'));
        }
        $clients = $this->Demands->Clients->find('list', ['limit' => 200]);
        $products = $this->Demands->Products->find('list', ['limit' => 200]);
        $this->set(compact('demand', 'clients', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demand id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demand = $this->Demands->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demand = $this->Demands->patchEntity($demand, $this->request->getData());
            if ($this->Demands->save($demand)) {
                $this->Flash->success(__('The demand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demand could not be saved. Please, try again.'));
        }
        $clients = $this->Demands->Clients->find('list', ['limit' => 200]);
        $products = $this->Demands->Products->find('list', ['limit' => 200]);
        $this->set(compact('demand', 'clients', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demand id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demand = $this->Demands->get($id);
        if ($this->Demands->delete($demand)) {
            $this->Flash->success(__('The demand has been deleted.'));
        } else {
            $this->Flash->error(__('The demand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
