<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tablesmyprecious Controller
 *
 * @property \App\Model\Table\TablesmypreciousTable $Tablesmyprecious
 *
 * @method \App\Model\Entity\Tablesmyprecious[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TablesmypreciousController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tablesmyprecious = $this->paginate($this->Tablesmyprecious);

        $this->set(compact('tablesmyprecious'));
    }

    /**
     * View method
     *
     * @param string|null $id Tablesmyprecious id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tablesmyprecious = $this->Tablesmyprecious->get($id, [
            'contain' => []
        ]);

        $this->set('tablesmyprecious', $tablesmyprecious);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tablesmyprecious = $this->Tablesmyprecious->newEntity();
        if ($this->request->is('post')) {
            $tablesmyprecious = $this->Tablesmyprecious->patchEntity($tablesmyprecious, $this->request->getData());
            if ($this->Tablesmyprecious->save($tablesmyprecious)) {
                $this->Flash->success(__('The tablesmyprecious has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablesmyprecious could not be saved. Please, try again.'));
        }
        $this->set(compact('tablesmyprecious'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tablesmyprecious id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tablesmyprecious = $this->Tablesmyprecious->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tablesmyprecious = $this->Tablesmyprecious->patchEntity($tablesmyprecious, $this->request->getData());
            if ($this->Tablesmyprecious->save($tablesmyprecious)) {
                $this->Flash->success(__('The tablesmyprecious has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tablesmyprecious could not be saved. Please, try again.'));
        }
        $this->set(compact('tablesmyprecious'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tablesmyprecious id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tablesmyprecious = $this->Tablesmyprecious->get($id);
        if ($this->Tablesmyprecious->delete($tablesmyprecious)) {
            $this->Flash->success(__('The tablesmyprecious has been deleted.'));
        } else {
            $this->Flash->error(__('The tablesmyprecious could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
