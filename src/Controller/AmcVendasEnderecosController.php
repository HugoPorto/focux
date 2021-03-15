<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AmcVendasEnderecos Controller
 *
 * @property \App\Model\Table\AmcVendasEnderecosTable $AmcVendasEnderecos
 *
 * @method \App\Model\Entity\AmcVendasEndereco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmcVendasEnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $amcVendasEnderecos = $this->paginate($this->AmcVendasEnderecos);

        $this->set(compact('amcVendasEnderecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Amc Vendas Endereco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amcVendasEndereco = $this->AmcVendasEnderecos->get($id, [
            'contain' => []
        ]);

        $this->set('amcVendasEndereco', $amcVendasEndereco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amcVendasEndereco = $this->AmcVendasEnderecos->newEntity();
        if ($this->request->is('post')) {
            $amcVendasEndereco = $this->AmcVendasEnderecos->patchEntity($amcVendasEndereco, $this->request->getData());
            if ($this->AmcVendasEnderecos->save($amcVendasEndereco)) {
                $this->Flash->success(__('The amc vendas endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amc vendas endereco could not be saved. Please, try again.'));
        }
        $this->set(compact('amcVendasEndereco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Amc Vendas Endereco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amcVendasEndereco = $this->AmcVendasEnderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amcVendasEndereco = $this->AmcVendasEnderecos->patchEntity($amcVendasEndereco, $this->request->getData());
            if ($this->AmcVendasEnderecos->save($amcVendasEndereco)) {
                $this->Flash->success(__('The amc vendas endereco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amc vendas endereco could not be saved. Please, try again.'));
        }
        $this->set(compact('amcVendasEndereco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Amc Vendas Endereco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amcVendasEndereco = $this->AmcVendasEnderecos->get($id);
        if ($this->AmcVendasEnderecos->delete($amcVendasEndereco)) {
            $this->Flash->success(__('The amc vendas endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The amc vendas endereco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
