<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tablesamc Controller
 *
 * @property \App\Model\Table\TablesamcTable $Tablesamc
 *
 * @method \App\Model\Entity\Tablesamc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TablesamcController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tablesamc = $this->paginate($this->Tablesamc);

        $this->set(compact('tablesamc'));
    }

    /**
     * View method
     *
     * @param string|null $id Tablesamc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablesamc = $this->Tablesamc->get($id, [
            'contain' => []
        ]);

        $this->set('tablesamc', $tablesamc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablesamc = $this->Tablesamc->newEntity();
        if ($this->request->is('post')) {
            $tablesamc = $this->Tablesamc->patchEntity($tablesamc, $this->request->getData());
            if ($this->Tablesamc->save($tablesamc)) {
                $this->Flash->success(__('The tablesamc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablesamc could not be saved. Please, try again.'));
        }
        $this->set(compact('tablesamc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tablesamc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablesamc = $this->Tablesamc->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablesamc = $this->Tablesamc->patchEntity($tablesamc, $this->request->getData());
            if ($this->Tablesamc->save($tablesamc)) {
                $this->Flash->success(__('The tablesamc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablesamc could not be saved. Please, try again.'));
        }
        $this->set(compact('tablesamc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tablesamc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablesamc = $this->Tablesamc->get($id);
        if ($this->Tablesamc->delete($tablesamc)) {
            $this->Flash->success(__('The tablesamc has been deleted.'));
        } else {
            $this->Flash->error(__('The tablesamc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
