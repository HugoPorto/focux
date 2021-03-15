<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cfops Controller
 *
 * @property \App\Model\Table\CfopsTable $Cfops
 *
 * @method \App\Model\Entity\Cfop[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CfopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cfops = $this->paginate($this->Cfops);

        $this->set(compact('cfops'));
    }

    /**
     * View method
     *
     * @param string|null $id Cfop id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cfop = $this->Cfops->get($id, [
            'contain' => []
        ]);

        $this->set('cfop', $cfop);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cfop = $this->Cfops->newEntity();
        if ($this->request->is('post')) {
            $cfop = $this->Cfops->patchEntity($cfop, $this->request->getData());
            if ($this->Cfops->save($cfop)) {
                $this->Flash->success(__('The cfop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cfop could not be saved. Please, try again.'));
        }
        $this->set(compact('cfop'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cfop id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cfop = $this->Cfops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cfop = $this->Cfops->patchEntity($cfop, $this->request->getData());
            if ($this->Cfops->save($cfop)) {
                $this->Flash->success(__('The cfop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cfop could not be saved. Please, try again.'));
        }
        $this->set(compact('cfop'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cfop id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cfop = $this->Cfops->get($id);
        if ($this->Cfops->delete($cfop)) {
            $this->Flash->success(__('The cfop has been deleted.'));
        } else {
            $this->Flash->error(__('The cfop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
