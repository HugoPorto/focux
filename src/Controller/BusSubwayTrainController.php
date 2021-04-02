<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusSubwayTrain Controller
 *
 * @property \App\Model\Table\BusSubwayTrainTable $BusSubwayTrain
 *
 * @method \App\Model\Entity\BusSubwayTrain[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusSubwayTrainController extends AppController
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
        $busSubwayTrain = $this->paginate($this->BusSubwayTrain);

        $this->set(compact('busSubwayTrain'));
    }

    /**
     * View method
     *
     * @param string|null $id Bus Subway Train id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $busSubwayTrain = $this->BusSubwayTrain->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('busSubwayTrain', $busSubwayTrain);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $busSubwayTrain = $this->BusSubwayTrain->newEntity();
        if ($this->request->is('post')) {
            $busSubwayTrain = $this->BusSubwayTrain->patchEntity($busSubwayTrain, $this->request->getData());
            if ($this->BusSubwayTrain->save($busSubwayTrain)) {
                $this->Flash->success(__('The bus subway train has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus subway train could not be saved. Please, try again.'));
        }
        $mounths = $this->BusSubwayTrain->Mounths->find('list', ['limit' => 200]);
        $users = $this->BusSubwayTrain->Users->find('list', ['limit' => 200]);
        $this->set(compact('busSubwayTrain', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bus Subway Train id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $busSubwayTrain = $this->BusSubwayTrain->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $busSubwayTrain = $this->BusSubwayTrain->patchEntity($busSubwayTrain, $this->request->getData());
            if ($this->BusSubwayTrain->save($busSubwayTrain)) {
                $this->Flash->success(__('The bus subway train has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bus subway train could not be saved. Please, try again.'));
        }
        $mounths = $this->BusSubwayTrain->Mounths->find('list', ['limit' => 200]);
        $users = $this->BusSubwayTrain->Users->find('list', ['limit' => 200]);
        $this->set(compact('busSubwayTrain', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bus Subway Train id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $busSubwayTrain = $this->BusSubwayTrain->get($id);
        if ($this->BusSubwayTrain->delete($busSubwayTrain)) {
            $this->Flash->success(__('The bus subway train has been deleted.'));
        } else {
            $this->Flash->error(__('The bus subway train could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
