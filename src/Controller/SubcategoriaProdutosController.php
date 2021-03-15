<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubcategoriaProdutos Controller
 *
 * @property \App\Model\Table\SubcategoriaProdutosTable $SubcategoriaProdutos
 *
 * @method \App\Model\Entity\SubcategoriaProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcategoriaProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $subcategoriaProdutos = $this->paginate($this->SubcategoriaProdutos);

        $this->set(compact('subcategoriaProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Subcategoria Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcategoriaProduto = $this->SubcategoriaProdutos->get($id, [
            'contain' => []
        ]);

        $this->set('subcategoriaProduto', $subcategoriaProduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subcategoriaProduto = $this->SubcategoriaProdutos->newEntity();
        if ($this->request->is('post')) {
            $subcategoriaProduto = $this->SubcategoriaProdutos->patchEntity($subcategoriaProduto, $this->request->getData());
            if ($this->SubcategoriaProdutos->save($subcategoriaProduto)) {
                $this->Flash->success(__('The subcategoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategoria produto could not be saved. Please, try again.'));
        }
        $this->set(compact('subcategoriaProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcategoria Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcategoriaProduto = $this->SubcategoriaProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcategoriaProduto = $this->SubcategoriaProdutos->patchEntity($subcategoriaProduto, $this->request->getData());
            if ($this->SubcategoriaProdutos->save($subcategoriaProduto)) {
                $this->Flash->success(__('The subcategoria produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategoria produto could not be saved. Please, try again.'));
        }
        $this->set(compact('subcategoriaProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcategoria Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcategoriaProduto = $this->SubcategoriaProdutos->get($id);
        if ($this->SubcategoriaProdutos->delete($subcategoriaProduto)) {
            $this->Flash->success(__('The subcategoria produto has been deleted.'));
        } else {
            $this->Flash->error(__('The subcategoria produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
