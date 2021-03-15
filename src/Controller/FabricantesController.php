<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fabricantes Controller
 *
 * @property \App\Model\Table\FabricantesTable $Fabricantes
 *
 * @method \App\Model\Entity\Fabricante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FabricantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fabricantes = $this->paginate($this->Fabricantes);

        $this->set(compact('fabricantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Fabricante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fabricante = $this->Fabricantes->get($id, [
            'contain' => []
        ]);

        $this->set('fabricante', $fabricante);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fabricante = $this->Fabricantes->newEntity();
        if ($this->request->is('post')) {
            $fabricante = $this->Fabricantes->patchEntity($fabricante, $this->request->getData());
            if ($this->Fabricantes->save($fabricante)) {
                $this->Flash->success(__('The fabricante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricante could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fabricante id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fabricante = $this->Fabricantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fabricante = $this->Fabricantes->patchEntity($fabricante, $this->request->getData());
            if ($this->Fabricantes->save($fabricante)) {
                $this->Flash->success(__('The fabricante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fabricante could not be saved. Please, try again.'));
        }
        $this->set(compact('fabricante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fabricante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fabricante = $this->Fabricantes->get($id);
        if ($this->Fabricantes->delete($fabricante)) {
            $this->Flash->success(__('The fabricante has been deleted.'));
        } else {
            $this->Flash->error(__('The fabricante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
