<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HousingExpenses Controller
 *
 * @property \App\Model\Table\HousingExpensesTable $HousingExpenses
 *
 * @method \App\Model\Entity\HousingExpense[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HousingExpensesController extends AppController
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
        $housingExpenses = $this->paginate($this->HousingExpenses);

        $this->set(compact('housingExpenses'));
    }

    /**
     * View method
     *
     * @param string|null $id Housing Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $housingExpense = $this->HousingExpenses->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('housingExpense', $housingExpense);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $housingExpense = $this->HousingExpenses->newEntity();
        if ($this->request->is('post')) {
            $housingExpense = $this->HousingExpenses->patchEntity($housingExpense, $this->request->getData());
            if ($this->HousingExpenses->save($housingExpense)) {
                $this->Flash->success(__('The housing expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The housing expense could not be saved. Please, try again.'));
        }
        $mounths = $this->HousingExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->HousingExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('housingExpense', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Housing Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $housingExpense = $this->HousingExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $housingExpense = $this->HousingExpenses->patchEntity($housingExpense, $this->request->getData());
            if ($this->HousingExpenses->save($housingExpense)) {
                $this->Flash->success(__('The housing expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The housing expense could not be saved. Please, try again.'));
        }
        $mounths = $this->HousingExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->HousingExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('housingExpense', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Housing Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $housingExpense = $this->HousingExpenses->get($id);
        if ($this->HousingExpenses->delete($housingExpense)) {
            $this->Flash->success(__('The housing expense has been deleted.'));
        } else {
            $this->Flash->error(__('The housing expense could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
