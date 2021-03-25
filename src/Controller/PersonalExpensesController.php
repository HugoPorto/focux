<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersonalExpenses Controller
 *
 * @property \App\Model\Table\PersonalExpensesTable $PersonalExpenses
 *
 * @method \App\Model\Entity\PersonalExpense[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonalExpensesController extends AppController
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
        $personalExpenses = $this->paginate($this->PersonalExpenses);

        $this->set(compact('personalExpenses'));
    }

    /**
     * View method
     *
     * @param string|null $id Personal Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalExpense = $this->PersonalExpenses->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('personalExpense', $personalExpense);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalExpense = $this->PersonalExpenses->newEntity();
        if ($this->request->is('post')) {
            $personalExpense = $this->PersonalExpenses->patchEntity($personalExpense, $this->request->getData());
            if ($this->PersonalExpenses->save($personalExpense)) {
                $this->Flash->success(__('The personal expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal expense could not be saved. Please, try again.'));
        }
        $mounths = $this->PersonalExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->PersonalExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('personalExpense', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personal Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalExpense = $this->PersonalExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalExpense = $this->PersonalExpenses->patchEntity($personalExpense, $this->request->getData());
            if ($this->PersonalExpenses->save($personalExpense)) {
                $this->Flash->success(__('The personal expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personal expense could not be saved. Please, try again.'));
        }
        $mounths = $this->PersonalExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->PersonalExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('personalExpense', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personal Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalExpense = $this->PersonalExpenses->get($id);
        if ($this->PersonalExpenses->delete($personalExpense)) {
            $this->Flash->success(__('The personal expense has been deleted.'));
        } else {
            $this->Flash->error(__('The personal expense could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
