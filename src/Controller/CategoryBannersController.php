<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoryBanners Controller
 *
 * @property \App\Model\Table\CategoryBannersTable $CategoryBanners
 *
 * @method \App\Model\Entity\CategoryBanner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoryBannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categoryBanners = $this->paginate($this->CategoryBanners);

        $this->set(compact('categoryBanners'));
    }

    /**
     * View method
     *
     * @param string|null $id Category Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryBanner = $this->CategoryBanners->get($id, [
            'contain' => []
        ]);

        $this->set('categoryBanner', $categoryBanner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoryBanner = $this->CategoryBanners->newEntity();
        if ($this->request->is('post')) {
            $categoryBanner = $this->CategoryBanners->patchEntity($categoryBanner, $this->request->getData());
            if ($this->CategoryBanners->save($categoryBanner)) {
                $this->Flash->success(__('The category banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category banner could not be saved. Please, try again.'));
        }
        $this->set(compact('categoryBanner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoryBanner = $this->CategoryBanners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryBanner = $this->CategoryBanners->patchEntity($categoryBanner, $this->request->getData());
            if ($this->CategoryBanners->save($categoryBanner)) {
                $this->Flash->success(__('The category banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category banner could not be saved. Please, try again.'));
        }
        $this->set(compact('categoryBanner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryBanner = $this->CategoryBanners->get($id);
        if ($this->CategoryBanners->delete($categoryBanner)) {
            $this->Flash->success(__('The category banner has been deleted.'));
        } else {
            $this->Flash->error(__('The category banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
