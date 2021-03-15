<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Updatetrends Controller
 *
 * @property \App\Model\Table\UpdatetrendsTable $Updatetrends
 *
 * @method \App\Model\Entity\Updatetrend[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UpdatetrendsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $updatetrends = $this->paginate($this->Updatetrends);

        $this->set(compact('updatetrends'));
    }

    /**
     * View method
     *
     * @param string|null $id Updatetrend id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $updatetrend = $this->Updatetrends->get($id, [
            'contain' => []
        ]);

        $this->set('updatetrend', $updatetrend);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $updatetrend = $this->Updatetrends->newEntity();
        if ($this->request->is('post')) {
            $updatetrend = $this->Updatetrends->patchEntity($updatetrend, $this->request->getData());
            if ($this->Updatetrends->save($updatetrend)) {
                $this->Flash->success(__('The updatetrend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The updatetrend could not be saved. Please, try again.'));
        }
        $this->set(compact('updatetrend'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Updatetrend id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $updatetrend = $this->Updatetrends->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $updatetrend = $this->Updatetrends->patchEntity($updatetrend, $this->request->getData());
            if ($this->Updatetrends->save($updatetrend)) {
                $this->Flash->success(__('The updatetrend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The updatetrend could not be saved. Please, try again.'));
        }
        $this->set(compact('updatetrend'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Updatetrend id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $updatetrend = $this->Updatetrends->get($id);
        if ($this->Updatetrends->delete($updatetrend)) {
            $this->Flash->success(__('The updatetrend has been deleted.'));
        } else {
            $this->Flash->error(__('The updatetrend could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
