<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExpensesWithPets Controller
 *
 * @property \App\Model\Table\ExpensesWithPetsTable $ExpensesWithPets
 *
 * @method \App\Model\Entity\ExpensesWithPet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpensesWithPetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Mounths', 'Users']
        ];
        $expensesWithPets = $this->paginate($this->ExpensesWithPets);

        $this->set(compact('expensesWithPets'));
    }

    /**
     * View method
     *
     * @param string|null $id Expenses With Pet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expensesWithPet = $this->ExpensesWithPets->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('expensesWithPet', $expensesWithPet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expensesWithPet = $this->ExpensesWithPets->newEntity();
        if ($this->request->is('post')) {
            $expensesWithPet = $this->ExpensesWithPets->patchEntity($expensesWithPet, $this->request->getData());
            if ($this->ExpensesWithPets->save($expensesWithPet)) {
                $this->Flash->success(__('The expenses with pet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses with pet could not be saved. Please, try again.'));
        }
        $mounths = $this->ExpensesWithPets->Mounths->find('list', ['limit' => 200]);
        $users = $this->ExpensesWithPets->Users->find('list', ['limit' => 200]);
        $this->set(compact('expensesWithPet', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expenses With Pet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expensesWithPet = $this->ExpensesWithPets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expensesWithPet = $this->ExpensesWithPets->patchEntity($expensesWithPet, $this->request->getData());
            if ($this->ExpensesWithPets->save($expensesWithPet)) {
                $this->Flash->success(__('The expenses with pet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses with pet could not be saved. Please, try again.'));
        }
        $mounths = $this->ExpensesWithPets->Mounths->find('list', ['limit' => 200]);
        $users = $this->ExpensesWithPets->Users->find('list', ['limit' => 200]);
        $this->set(compact('expensesWithPet', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expenses With Pet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expensesWithPet = $this->ExpensesWithPets->get($id);
        if ($this->ExpensesWithPets->delete($expensesWithPet)) {
            $this->Flash->success(__('The expenses with pet has been deleted.'));
        } else {
            $this->Flash->error(__('The expenses with pet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
