<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Updatetrendsfilms Controller
 *
 * @property \App\Model\Table\UpdatetrendsfilmsTable $Updatetrendsfilms
 *
 * @method \App\Model\Entity\Updatetrendsfilm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UpdatetrendsfilmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $updatetrendsfilms = $this->paginate($this->Updatetrendsfilms);

        $this->set(compact('updatetrendsfilms'));
    }

    /**
     * View method
     *
     * @param string|null $id Updatetrendsfilm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $updatetrendsfilm = $this->Updatetrendsfilms->get($id, [
            'contain' => []
        ]);

        $this->set('updatetrendsfilm', $updatetrendsfilm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $updatetrendsfilm = $this->Updatetrendsfilms->newEntity();
        if ($this->request->is('post')) {
            $updatetrendsfilm = $this->Updatetrendsfilms->patchEntity($updatetrendsfilm, $this->request->getData());
            if ($this->Updatetrendsfilms->save($updatetrendsfilm)) {
                $this->Flash->success(__('The updatetrendsfilm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The updatetrendsfilm could not be saved. Please, try again.'));
        }
        $this->set(compact('updatetrendsfilm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Updatetrendsfilm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $updatetrendsfilm = $this->Updatetrendsfilms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $updatetrendsfilm = $this->Updatetrendsfilms->patchEntity($updatetrendsfilm, $this->request->getData());
            if ($this->Updatetrendsfilms->save($updatetrendsfilm)) {
                $this->Flash->success(__('The updatetrendsfilm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The updatetrendsfilm could not be saved. Please, try again.'));
        }
        $this->set(compact('updatetrendsfilm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Updatetrendsfilm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $updatetrendsfilm = $this->Updatetrendsfilms->get($id);
        if ($this->Updatetrendsfilms->delete($updatetrendsfilm)) {
            $this->Flash->success(__('The updatetrendsfilm has been deleted.'));
        } else {
            $this->Flash->error(__('The updatetrendsfilm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
