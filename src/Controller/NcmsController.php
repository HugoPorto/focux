<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ncms Controller
 *
 * @property \App\Model\Table\NcmsTable $Ncms
 *
 * @method \App\Model\Entity\Ncm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NcmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ncms = $this->paginate($this->Ncms);

        $this->set(compact('ncms'));
    }

    /**
     * View method
     *
     * @param string|null $id Ncm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ncm = $this->Ncms->get($id, [
            'contain' => []
        ]);

        $this->set('ncm', $ncm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ncm = $this->Ncms->newEntity();
        if ($this->request->is('post')) {
            $ncm = $this->Ncms->patchEntity($ncm, $this->request->getData());
            if ($this->Ncms->save($ncm)) {
                $this->Flash->success(__('The ncm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ncm could not be saved. Please, try again.'));
        }
        $this->set(compact('ncm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ncm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ncm = $this->Ncms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ncm = $this->Ncms->patchEntity($ncm, $this->request->getData());
            if ($this->Ncms->save($ncm)) {
                $this->Flash->success(__('The ncm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ncm could not be saved. Please, try again.'));
        }
        $this->set(compact('ncm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ncm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ncm = $this->Ncms->get($id);
        if ($this->Ncms->delete($ncm)) {
            $this->Flash->success(__('The ncm has been deleted.'));
        } else {
            $this->Flash->error(__('The ncm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
