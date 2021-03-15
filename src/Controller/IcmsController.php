<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Icms Controller
 *
 * @property \App\Model\Table\IcmsTable $Icms
 *
 * @method \App\Model\Entity\Icm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IcmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $icms = $this->paginate($this->Icms);

        $this->set(compact('icms'));
    }

    /**
     * View method
     *
     * @param string|null $id Icm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $icm = $this->Icms->get($id, [
            'contain' => []
        ]);

        $this->set('icm', $icm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $icm = $this->Icms->newEntity();
        if ($this->request->is('post')) {
            $icm = $this->Icms->patchEntity($icm, $this->request->getData());
            if ($this->Icms->save($icm)) {
                $this->Flash->success(__('The icm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icm could not be saved. Please, try again.'));
        }
        $this->set(compact('icm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Icm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $icm = $this->Icms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $icm = $this->Icms->patchEntity($icm, $this->request->getData());
            if ($this->Icms->save($icm)) {
                $this->Flash->success(__('The icm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icm could not be saved. Please, try again.'));
        }
        $this->set(compact('icm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Icm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $icm = $this->Icms->get($id);
        if ($this->Icms->delete($icm)) {
            $this->Flash->success(__('The icm has been deleted.'));
        } else {
            $this->Flash->error(__('The icm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
