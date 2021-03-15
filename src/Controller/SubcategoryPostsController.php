<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubcategoryPosts Controller
 *
 * @property \App\Model\Table\SubcategoryPostsTable $SubcategoryPosts
 *
 * @method \App\Model\Entity\SubcategoryPost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcategoryPostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoryPosts']
        ];
        $subcategoryPosts = $this->paginate($this->SubcategoryPosts);

        $this->set(compact('subcategoryPosts'));
    }

    /**
     * View method
     *
     * @param string|null $id Subcategory Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcategoryPost = $this->SubcategoryPosts->get($id, [
            'contain' => ['CategoryPosts']
        ]);

        $this->set('subcategoryPost', $subcategoryPost);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subcategoryPost = $this->SubcategoryPosts->newEntity();
        if ($this->request->is('post')) {
            $subcategoryPost = $this->SubcategoryPosts->patchEntity($subcategoryPost, $this->request->getData());
            if ($this->SubcategoryPosts->save($subcategoryPost)) {
                $this->Flash->success(__('The subcategory post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategory post could not be saved. Please, try again.'));
        }
        $categoryPosts = $this->SubcategoryPosts->CategoryPosts->find('list', ['limit' => 200]);
        $this->set(compact('subcategoryPost', 'categoryPosts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcategory Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcategoryPost = $this->SubcategoryPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcategoryPost = $this->SubcategoryPosts->patchEntity($subcategoryPost, $this->request->getData());
            if ($this->SubcategoryPosts->save($subcategoryPost)) {
                $this->Flash->success(__('The subcategory post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subcategory post could not be saved. Please, try again.'));
        }
        $categoryPosts = $this->SubcategoryPosts->CategoryPosts->find('list', ['limit' => 200]);
        $this->set(compact('subcategoryPost', 'categoryPosts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcategory Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcategoryPost = $this->SubcategoryPosts->get($id);
        if ($this->SubcategoryPosts->delete($subcategoryPost)) {
            $this->Flash->success(__('The subcategory post has been deleted.'));
        } else {
            $this->Flash->error(__('The subcategory post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
