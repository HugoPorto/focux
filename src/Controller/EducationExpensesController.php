<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EducationExpenses Controller
 *
 * @property \App\Model\Table\EducationExpensesTable $EducationExpenses
 *
 * @method \App\Model\Entity\EducationExpense[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducationExpensesController extends AppController
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
        $educationExpenses = $this->paginate($this->EducationExpenses);

        $this->set(compact('educationExpenses'));
    }

    /**
     * View method
     *
     * @param string|null $id Education Expense id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationExpense = $this->EducationExpenses->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('educationExpense', $educationExpense);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationExpense = $this->EducationExpenses->newEntity();
        if ($this->request->is('post')) {
            $educationExpense = $this->EducationExpenses->patchEntity($educationExpense, $this->request->getData());
            if ($this->EducationExpenses->save($educationExpense)) {
                $this->Flash->success(__('The education expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education expense could not be saved. Please, try again.'));
        }
        $mounths = $this->EducationExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->EducationExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationExpense', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Education Expense id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationExpense = $this->EducationExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationExpense = $this->EducationExpenses->patchEntity($educationExpense, $this->request->getData());
            if ($this->EducationExpenses->save($educationExpense)) {
                $this->Flash->success(__('The education expense has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education expense could not be saved. Please, try again.'));
        }
        $mounths = $this->EducationExpenses->Mounths->find('list', ['limit' => 200]);
        $users = $this->EducationExpenses->Users->find('list', ['limit' => 200]);
        $this->set(compact('educationExpense', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Education Expense id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationExpense = $this->EducationExpenses->get($id);
        if ($this->EducationExpenses->delete($educationExpense)) {
            $this->Flash->success(__('The education expense has been deleted.'));
        } else {
            $this->Flash->error(__('The education expense could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
