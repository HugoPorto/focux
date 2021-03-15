<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MethodTopayments Controller
 *
 * @property \App\Model\Table\MethodTopaymentsTable $MethodTopayments
 *
 * @method \App\Model\Entity\MethodTopayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MethodTopaymentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $methodTopayments = $this->paginate($this->MethodTopayments);

        $this->set(compact('methodTopayments'));
    }

    /**
     * View method
     *
     * @param string|null $id Method Topayment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $methodTopayment = $this->MethodTopayments->get($id, [
            'contain' => []
        ]);

        $this->set('methodTopayment', $methodTopayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $methodTopayment = $this->MethodTopayments->newEntity();
        if ($this->request->is('post')) {
            $methodTopayment = $this->MethodTopayments->patchEntity($methodTopayment, $this->request->getData());
            if ($this->MethodTopayments->save($methodTopayment)) {
                $this->Flash->success(__('The method topayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The method topayment could not be saved. Please, try again.'));
        }
        $this->set(compact('methodTopayment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Method Topayment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $methodTopayment = $this->MethodTopayments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $methodTopayment = $this->MethodTopayments->patchEntity($methodTopayment, $this->request->getData());
            if ($this->MethodTopayments->save($methodTopayment)) {
                $this->Flash->success(__('The method topayment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The method topayment could not be saved. Please, try again.'));
        }
        $this->set(compact('methodTopayment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Method Topayment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $methodTopayment = $this->MethodTopayments->get($id);
        if ($this->MethodTopayments->delete($methodTopayment)) {
            $this->Flash->success(__('The method topayment has been deleted.'));
        } else {
            $this->Flash->error(__('The method topayment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
