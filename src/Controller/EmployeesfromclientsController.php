<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeesfromclients Controller
 *
 * @property \App\Model\Table\EmployeesfromclientsTable $Employeesfromclients
 *
 * @method \App\Model\Entity\Employeesfromclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesfromclientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $employeesfromclients = $this->paginate($this->Employeesfromclients);

        $this->set(compact('employeesfromclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Employeesfromclient id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesfromclient = $this->Employeesfromclients->get($id, [
            'contain' => ['Clients']
        ]);

        $this->set('employeesfromclient', $employeesfromclient);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesfromclient = $this->Employeesfromclients->newEntity();
        if ($this->request->is('post')) {
            $employeesfromclient = $this->Employeesfromclients->patchEntity($employeesfromclient, $this->request->getData());
            if ($this->Employeesfromclients->save($employeesfromclient)) {
                $this->Flash->success(__('The employeesfromclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeesfromclient could not be saved. Please, try again.'));
        }
        $clients = $this->Employeesfromclients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('employeesfromclient', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeesfromclient id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesfromclient = $this->Employeesfromclients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesfromclient = $this->Employeesfromclients->patchEntity($employeesfromclient, $this->request->getData());
            if ($this->Employeesfromclients->save($employeesfromclient)) {
                $this->Flash->success(__('The employeesfromclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeesfromclient could not be saved. Please, try again.'));
        }
        $clients = $this->Employeesfromclients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('employeesfromclient', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employeesfromclient id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesfromclient = $this->Employeesfromclients->get($id);
        if ($this->Employeesfromclients->delete($employeesfromclient)) {
            $this->Flash->success(__('The employeesfromclient has been deleted.'));
        } else {
            $this->Flash->error(__('The employeesfromclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
