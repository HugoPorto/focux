<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fornecedores Controller
 *
 * @property \App\Model\Table\FornecedoresTable $Fornecedores
 *
 * @method \App\Model\Entity\Fornecedore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FornecedoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Planocontas', 'Estados', 'Cidades', 'Empresas']
        ];
        $fornecedores = $this->paginate($this->Fornecedores);

        $this->set(compact('fornecedores'));
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => ['Planocontas', 'Estados', 'Cidades', 'Empresas']
        ]);

        $this->set('fornecedore', $fornecedore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedore = $this->Fornecedores->newEntity();
        if ($this->request->is('post')) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->getData());
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success(__('The fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fornecedore could not be saved. Please, try again.'));
        }
        $planocontas = $this->Fornecedores->Planocontas->find('list', ['limit' => 200]);
        $estados = $this->Fornecedores->Estados->find('list', ['limit' => 200]);
        $cidades = $this->Fornecedores->Cidades->find('list', ['limit' => 200]);
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('fornecedore', 'planocontas', 'estados', 'cidades', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedore = $this->Fornecedores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedore = $this->Fornecedores->patchEntity($fornecedore, $this->request->getData());
            if ($this->Fornecedores->save($fornecedore)) {
                $this->Flash->success(__('The fornecedore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fornecedore could not be saved. Please, try again.'));
        }
        $planocontas = $this->Fornecedores->Planocontas->find('list', ['limit' => 200]);
        $estados = $this->Fornecedores->Estados->find('list', ['limit' => 200]);
        $cidades = $this->Fornecedores->Cidades->find('list', ['limit' => 200]);
        $empresas = $this->Fornecedores->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('fornecedore', 'planocontas', 'estados', 'cidades', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedore = $this->Fornecedores->get($id);
        if ($this->Fornecedores->delete($fornecedore)) {
            $this->Flash->success(__('The fornecedore has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
