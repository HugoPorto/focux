<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Csts Controller
 *
 * @property \App\Model\Table\CstsTable $Csts
 *
 * @method \App\Model\Entity\Cst[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CstsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $csts = $this->paginate($this->Csts);

        $this->set(compact('csts'));
    }

    /**
     * View method
     *
     * @param string|null $id Cst id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cst = $this->Csts->get($id, [
            'contain' => []
        ]);

        $this->set('cst', $cst);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cst = $this->Csts->newEntity();
        if ($this->request->is('post')) {
            $cst = $this->Csts->patchEntity($cst, $this->request->getData());
            if ($this->Csts->save($cst)) {
                $this->Flash->success(__('The cst has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cst could not be saved. Please, try again.'));
        }
        $this->set(compact('cst'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cst id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cst = $this->Csts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cst = $this->Csts->patchEntity($cst, $this->request->getData());
            if ($this->Csts->save($cst)) {
                $this->Flash->success(__('The cst has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cst could not be saved. Please, try again.'));
        }
        $this->set(compact('cst'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cst id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cst = $this->Csts->get($id);
        if ($this->Csts->delete($cst)) {
            $this->Flash->success(__('The cst has been deleted.'));
        } else {
            $this->Flash->error(__('The cst could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
