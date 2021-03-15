<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Changelogs Controller
 *
 * @property \App\Model\Table\ChangelogsTable $Changelogs
 *
 * @method \App\Model\Entity\Changelog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChangelogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $changelogs = $this->paginate($this->Changelogs);

        $this->set(compact('changelogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Changelog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $changelog = $this->Changelogs->get($id, [
            'contain' => []
        ]);

        $this->set('changelog', $changelog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $changelog = $this->Changelogs->newEntity();
        if ($this->request->is('post')) {
            $changelog = $this->Changelogs->patchEntity($changelog, $this->request->getData());
            if ($this->Changelogs->save($changelog)) {
                $this->Flash->success(__('The changelog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The changelog could not be saved. Please, try again.'));
        }
        $this->set(compact('changelog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Changelog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $changelog = $this->Changelogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $changelog = $this->Changelogs->patchEntity($changelog, $this->request->getData());
            if ($this->Changelogs->save($changelog)) {
                $this->Flash->success(__('The changelog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The changelog could not be saved. Please, try again.'));
        }
        $this->set(compact('changelog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Changelog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $changelog = $this->Changelogs->get($id);
        if ($this->Changelogs->delete($changelog)) {
            $this->Flash->success(__('The changelog has been deleted.'));
        } else {
            $this->Flash->error(__('The changelog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
