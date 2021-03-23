<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mounths Controller
 *
 * @property \App\Model\Table\MounthsTable $Mounths
 *
 * @method \App\Model\Entity\Mounth[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MounthsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mounths = $this->paginate($this->Mounths);

        $this->set(compact('mounths'));
    }

    /**
     * View method
     *
     * @param string|null $id Mounth id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mounth = $this->Mounths->get($id, [
            'contain' => []
        ]);

        $this->set('mounth', $mounth);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mounth = $this->Mounths->newEntity();
        if ($this->request->is('post')) {
            $mounth = $this->Mounths->patchEntity($mounth, $this->request->getData());
            if ($this->Mounths->save($mounth)) {
                $this->Flash->success(__('The mounth has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mounth could not be saved. Please, try again.'));
        }
        $this->set(compact('mounth'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mounth id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mounth = $this->Mounths->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mounth = $this->Mounths->patchEntity($mounth, $this->request->getData());
            if ($this->Mounths->save($mounth)) {
                $this->Flash->success(__('The mounth has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mounth could not be saved. Please, try again.'));
        }
        $this->set(compact('mounth'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mounth id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mounth = $this->Mounths->get($id);
        if ($this->Mounths->delete($mounth)) {
            $this->Flash->success(__('The mounth has been deleted.'));
        } else {
            $this->Flash->error(__('The mounth could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
