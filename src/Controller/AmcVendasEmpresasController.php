<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AmcVendasEmpresas Controller
 *
 * @property \App\Model\Table\AmcVendasEmpresasTable $AmcVendasEmpresas
 *
 * @method \App\Model\Entity\AmcVendasEmpresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmcVendasEmpresasController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(
            [
                'api',
            ]);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AmcVendasEnderecos']
        ];
        $amcVendasEmpresas = $this->paginate($this->AmcVendasEmpresas);

        $this->set(compact('amcVendasEmpresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Amc Vendas Empresa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amcVendasEmpresa = $this->AmcVendasEmpresas->get($id, [
            'contain' => ['AmcVendasEnderecos']
        ]);

        $this->set('amcVendasEmpresa', $amcVendasEmpresa);
    }

    public function api()
    {
        $amcVendasEmpresa = $this->AmcVendasEmpresas->find('all');

        $this->set([
            'amcVendasEmpresa' => $amcVendasEmpresa,
            '_serialize' => ['amcVendasEmpresa']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amcVendasEmpresa = $this->AmcVendasEmpresas->newEntity();
        if ($this->request->is('post')) {
            $amcVendasEmpresa = $this->AmcVendasEmpresas->patchEntity($amcVendasEmpresa, $this->request->getData());
            if ($this->AmcVendasEmpresas->save($amcVendasEmpresa)) {
                $this->Flash->success(__('The amc vendas empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amc vendas empresa could not be saved. Please, try again.'));
        }
        $amcVendasEnderecos = $this->AmcVendasEmpresas->AmcVendasEnderecos->find('list', ['limit' => 200]);
        $this->set(compact('amcVendasEmpresa', 'amcVendasEnderecos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Amc Vendas Empresa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amcVendasEmpresa = $this->AmcVendasEmpresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amcVendasEmpresa = $this->AmcVendasEmpresas->patchEntity($amcVendasEmpresa, $this->request->getData());
            if ($this->AmcVendasEmpresas->save($amcVendasEmpresa)) {
                $this->Flash->success(__('The amc vendas empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amc vendas empresa could not be saved. Please, try again.'));
        }
        $amcVendasEnderecos = $this->AmcVendasEmpresas->AmcVendasEnderecos->find('list', ['limit' => 200]);
        $this->set(compact('amcVendasEmpresa', 'amcVendasEnderecos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Amc Vendas Empresa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amcVendasEmpresa = $this->AmcVendasEmpresas->get($id);
        if ($this->AmcVendasEmpresas->delete($amcVendasEmpresa)) {
            $this->Flash->success(__('The amc vendas empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The amc vendas empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
