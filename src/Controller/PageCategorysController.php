<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PageCategorys Controller
 *
 * @property \App\Model\Table\PageCategorysTable $PageCategorys
 *
 * @method \App\Model\Entity\PageCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PageCategorysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pageCategorys = $this->paginate($this->PageCategorys);

        $this->set(compact('pageCategorys'));
    }

    /**
     * View method
     *
     * @param string|null $id Page Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pageCategory = $this->PageCategorys->get($id, [
            'contain' => []
        ]);

        $this->set('pageCategory', $pageCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pageCategory = $this->PageCategorys->newEntity();
        if ($this->request->is('post')) {
            $pageCategory = $this->PageCategorys->patchEntity($pageCategory, $this->request->getData());
            if ($this->PageCategorys->save($pageCategory)) {
                $this->Flash->success(__('The page category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page category could not be saved. Please, try again.'));
        }
        $this->set(compact('pageCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pageCategory = $this->PageCategorys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageCategory = $this->PageCategorys->patchEntity($pageCategory, $this->request->getData());
            if ($this->PageCategorys->save($pageCategory)) {
                $this->Flash->success(__('The page category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The page category could not be saved. Please, try again.'));
        }
        $this->set(compact('pageCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageCategory = $this->PageCategorys->get($id);
        if ($this->PageCategorys->delete($pageCategory)) {
            $this->Flash->success(__('The page category has been deleted.'));
        } else {
            $this->Flash->error(__('The page category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
