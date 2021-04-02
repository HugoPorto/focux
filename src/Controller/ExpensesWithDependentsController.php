<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExpensesWithDependents Controller
 *
 * @property \App\Model\Table\ExpensesWithDependentsTable $ExpensesWithDependents
 *
 * @method \App\Model\Entity\ExpensesWithDependent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExpensesWithDependentsController extends AppController
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
        $expensesWithDependents = $this->paginate($this->ExpensesWithDependents);

        $this->set(compact('expensesWithDependents'));
    }

    /**
     * View method
     *
     * @param string|null $id Expenses With Dependent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expensesWithDependent = $this->ExpensesWithDependents->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('expensesWithDependent', $expensesWithDependent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expensesWithDependent = $this->ExpensesWithDependents->newEntity();
        if ($this->request->is('post')) {
            $expensesWithDependent = $this->ExpensesWithDependents->patchEntity($expensesWithDependent, $this->request->getData());
            if ($this->ExpensesWithDependents->save($expensesWithDependent)) {
                $this->Flash->success(__('The expenses with dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses with dependent could not be saved. Please, try again.'));
        }
        $mounths = $this->ExpensesWithDependents->Mounths->find('list', ['limit' => 200]);
        $users = $this->ExpensesWithDependents->Users->find('list', ['limit' => 200]);
        $this->set(compact('expensesWithDependent', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Expenses With Dependent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expensesWithDependent = $this->ExpensesWithDependents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expensesWithDependent = $this->ExpensesWithDependents->patchEntity($expensesWithDependent, $this->request->getData());
            if ($this->ExpensesWithDependents->save($expensesWithDependent)) {
                $this->Flash->success(__('The expenses with dependent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The expenses with dependent could not be saved. Please, try again.'));
        }
        $mounths = $this->ExpensesWithDependents->Mounths->find('list', ['limit' => 200]);
        $users = $this->ExpensesWithDependents->Users->find('list', ['limit' => 200]);
        $this->set(compact('expensesWithDependent', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Expenses With Dependent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expensesWithDependent = $this->ExpensesWithDependents->get($id);
        if ($this->ExpensesWithDependents->delete($expensesWithDependent)) {
            $this->Flash->success(__('The expenses with dependent has been deleted.'));
        } else {
            $this->Flash->error(__('The expenses with dependent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
