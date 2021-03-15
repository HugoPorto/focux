<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cests Controller
 *
 * @property \App\Model\Table\CestsTable $Cests
 *
 * @method \App\Model\Entity\Cest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cests = $this->paginate($this->Cests);

        $this->set(compact('cests'));
    }

    /**
     * View method
     *
     * @param string|null $id Cest id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cest = $this->Cests->get($id, [
            'contain' => []
        ]);

        $this->set('cest', $cest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cest = $this->Cests->newEntity();
        if ($this->request->is('post')) {
            $cest = $this->Cests->patchEntity($cest, $this->request->getData());
            if ($this->Cests->save($cest)) {
                $this->Flash->success(__('The cest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cest could not be saved. Please, try again.'));
        }
        $this->set(compact('cest'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cest id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cest = $this->Cests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cest = $this->Cests->patchEntity($cest, $this->request->getData());
            if ($this->Cests->save($cest)) {
                $this->Flash->success(__('The cest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cest could not be saved. Please, try again.'));
        }
        $this->set(compact('cest'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cest id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cest = $this->Cests->get($id);
        if ($this->Cests->delete($cest)) {
            $this->Flash->success(__('The cest has been deleted.'));
        } else {
            $this->Flash->error(__('The cest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
