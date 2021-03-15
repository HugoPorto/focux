<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tablescolibris Controller
 *
 * @property \App\Model\Table\TablescolibrisTable $Tablescolibris
 *
 * @method \App\Model\Entity\Tablescolibri[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TablescolibrisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tablescolibris = $this->paginate($this->Tablescolibris);

        $this->set(compact('tablescolibris'));
    }

    /**
     * View method
     *
     * @param string|null $id Tablescolibri id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablescolibri = $this->Tablescolibris->get($id, [
            'contain' => []
        ]);

        $this->set('tablescolibri', $tablescolibri);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablescolibri = $this->Tablescolibris->newEntity();
        if ($this->request->is('post')) {
            $tablescolibri = $this->Tablescolibris->patchEntity($tablescolibri, $this->request->getData());
            if ($this->Tablescolibris->save($tablescolibri)) {
                $this->Flash->success(__('The tablescolibri has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablescolibri could not be saved. Please, try again.'));
        }
        $this->set(compact('tablescolibri'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tablescolibri id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablescolibri = $this->Tablescolibris->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablescolibri = $this->Tablescolibris->patchEntity($tablescolibri, $this->request->getData());
            if ($this->Tablescolibris->save($tablescolibri)) {
                $this->Flash->success(__('The tablescolibri has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablescolibri could not be saved. Please, try again.'));
        }
        $this->set(compact('tablescolibri'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tablescolibri id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablescolibri = $this->Tablescolibris->get($id);
        if ($this->Tablescolibris->delete($tablescolibri)) {
            $this->Flash->success(__('The tablescolibri has been deleted.'));
        } else {
            $this->Flash->error(__('The tablescolibri could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
