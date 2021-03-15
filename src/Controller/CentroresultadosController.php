<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centroresultados Controller
 *
 * @property \App\Model\Table\CentroresultadosTable $Centroresultados
 *
 * @method \App\Model\Entity\Centroresultado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CentroresultadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $centroresultados = $this->paginate($this->Centroresultados);

        $this->set(compact('centroresultados'));
    }

    /**
     * View method
     *
     * @param string|null $id Centroresultado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centroresultado = $this->Centroresultados->get($id, [
            'contain' => []
        ]);

        $this->set('centroresultado', $centroresultado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centroresultado = $this->Centroresultados->newEntity();
        if ($this->request->is('post')) {
            $centroresultado = $this->Centroresultados->patchEntity($centroresultado, $this->request->getData());
            if ($this->Centroresultados->save($centroresultado)) {
                $this->Flash->success(__('The centroresultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centroresultado could not be saved. Please, try again.'));
        }
        $this->set(compact('centroresultado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Centroresultado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centroresultado = $this->Centroresultados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centroresultado = $this->Centroresultados->patchEntity($centroresultado, $this->request->getData());
            if ($this->Centroresultados->save($centroresultado)) {
                $this->Flash->success(__('The centroresultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centroresultado could not be saved. Please, try again.'));
        }
        $this->set(compact('centroresultado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Centroresultado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centroresultado = $this->Centroresultados->get($id);
        if ($this->Centroresultados->delete($centroresultado)) {
            $this->Flash->success(__('The centroresultado has been deleted.'));
        } else {
            $this->Flash->error(__('The centroresultado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
