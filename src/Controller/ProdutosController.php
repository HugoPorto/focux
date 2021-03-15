<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupotributacoes', 'CategoriaProdutos', 'Cfops', 'Csts', 'Ncms', 'Cests', 'Fabricantes', 'Fornecedores', 'Unidades', 'SubcategoriaProdutos', 'Empresas']
        ];
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['Grupotributacoes', 'CategoriaProdutos', 'Cfops', 'Csts', 'Ncms', 'Cests', 'Fabricantes', 'Fornecedores', 'Unidades', 'SubcategoriaProdutos', 'Empresas']
        ]);

        $this->set('produto', $produto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $grupotributacoes = $this->Produtos->Grupotributacoes->find('list', ['limit' => 200]);
        $categoriaProdutos = $this->Produtos->CategoriaProdutos->find('list', ['limit' => 200]);
        $cfops = $this->Produtos->Cfops->find('list', ['limit' => 200]);
        $csts = $this->Produtos->Csts->find('list', ['limit' => 200]);
        $ncms = $this->Produtos->Ncms->find('list', ['limit' => 200]);
        $cests = $this->Produtos->Cests->find('list', ['limit' => 200]);
        $fabricantes = $this->Produtos->Fabricantes->find('list', ['limit' => 200]);
        $fornecedores = $this->Produtos->Fornecedores->find('list', ['limit' => 200]);
        $unidades = $this->Produtos->Unidades->find('list', ['limit' => 200]);
        $subcategoriaProdutos = $this->Produtos->SubcategoriaProdutos->find('list', ['limit' => 200]);
        $empresas = $this->Produtos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'grupotributacoes', 'categoriaProdutos', 'cfops', 'csts', 'ncms', 'cests', 'fabricantes', 'fornecedores', 'unidades', 'subcategoriaProdutos', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $grupotributacoes = $this->Produtos->Grupotributacoes->find('list', ['limit' => 200]);
        $categoriaProdutos = $this->Produtos->CategoriaProdutos->find('list', ['limit' => 200]);
        $cfops = $this->Produtos->Cfops->find('list', ['limit' => 200]);
        $csts = $this->Produtos->Csts->find('list', ['limit' => 200]);
        $ncms = $this->Produtos->Ncms->find('list', ['limit' => 200]);
        $cests = $this->Produtos->Cests->find('list', ['limit' => 200]);
        $fabricantes = $this->Produtos->Fabricantes->find('list', ['limit' => 200]);
        $fornecedores = $this->Produtos->Fornecedores->find('list', ['limit' => 200]);
        $unidades = $this->Produtos->Unidades->find('list', ['limit' => 200]);
        $subcategoriaProdutos = $this->Produtos->SubcategoriaProdutos->find('list', ['limit' => 200]);
        $empresas = $this->Produtos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'grupotributacoes', 'categoriaProdutos', 'cfops', 'csts', 'ncms', 'cests', 'fabricantes', 'fornecedores', 'unidades', 'subcategoriaProdutos', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
