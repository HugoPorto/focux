<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HealthExpenses Controller
 *
 * @property \App\Model\Table\HealthExpensesTable $HealthExpenses
 *
 * @method \App\Model\Entity\HealthExpense[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HealthExpensesController extends AppController
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
        $healthExpenses = $this->paginate($this->HealthExpenses);

        $this->set(compact('healthExpenses'));
    }

    /**
     * View method
     *
     * @param string|null $id Health Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $healthExpense = $this->HealthExpenses->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('healthExpense', $healthExpense);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $healthExpense = $this->HealthExpenses->newEntity();
        if ($this->request->is('post')) {
            $healthExpense = $this->HealthExpenses->patchEntity($healthExpense, $this->request->getData());
            if ($this->HealthExpenses->save($healthExpense)) {
                $this->Flash->success(__('The health expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health expense could not be saved. Please, try again.'));
        }
        $mounths = $this->HealthExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->HealthExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('healthExpense', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Health Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $healthExpense = $this->HealthExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $healthExpense = $this->HealthExpenses->patchEntity($healthExpense, $this->request->getData());
            if ($this->HealthExpenses->save($healthExpense)) {
                $this->Flash->success(__('The health expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health expense could not be saved. Please, try again.'));
        }
        $mounths = $this->HealthExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->HealthExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('healthExpense', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Health Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $healthExpense = $this->HealthExpenses->get($id);
        if ($this->HealthExpenses->delete($healthExpense)) {
            $this->Flash->success(__('The health expense has been deleted.'));
        } else {
            $this->Flash->error(__('The health expense could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
