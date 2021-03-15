<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comics Controller
 *
 * @property \App\Model\Table\ComicsTable $Comics
 *
 * @method \App\Model\Entity\Comic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Magazines']
        ];
        $comics = $this->paginate($this->Comics);

        $this->set(compact('comics'));
    }

    /**
     * View method
     *
     * @param string|null $id Comic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comic = $this->Comics->get($id, [
            'contain' => ['Magazines']
        ]);

        $this->set('comic', $comic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comic = $this->Comics->newEntity();
        if ($this->request->is('post')) {
            $comic = $this->Comics->patchEntity($comic, $this->request->getData());
            if ($this->Comics->save($comic)) {
                $this->Flash->success(__('The comic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comic could not be saved. Please, try again.'));
        }
        $magazines = $this->Comics->Magazines->find('list', ['limit' => 200]);
        $this->set(compact('comic', 'magazines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comic = $this->Comics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comic = $this->Comics->patchEntity($comic, $this->request->getData());
            if ($this->Comics->save($comic)) {
                $this->Flash->success(__('The comic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comic could not be saved. Please, try again.'));
        }
        $magazines = $this->Comics->Magazines->find('list', ['limit' => 200]);
        $this->set(compact('comic', 'magazines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comic = $this->Comics->get($id);
        if ($this->Comics->delete($comic)) {
            $this->Flash->success(__('The comic has been deleted.'));
        } else {
            $this->Flash->error(__('The comic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
