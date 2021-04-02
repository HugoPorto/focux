<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BarsNightclubs Controller
 *
 * @property \App\Model\Table\BarsNightclubsTable $BarsNightclubs
 *
 * @method \App\Model\Entity\BarsNightclub[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarsNightclubsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Mounths', 'Users']
        ];
        $barsNightclubs = $this->paginate($this->BarsNightclubs);

        $this->set(compact('barsNightclubs'));
    }

    /**
     * View method
     *
     * @param string|null $id Bars Nightclub id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barsNightclub = $this->BarsNightclubs->get($id, [
            'contain' => ['Mounths', 'Users']
        ]);

        $this->set('barsNightclub', $barsNightclub);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barsNightclub = $this->BarsNightclubs->newEntity();
        if ($this->request->is('post')) {
            $barsNightclub = $this->BarsNightclubs->patchEntity($barsNightclub, $this->request->getData());
            if ($this->BarsNightclubs->save($barsNightclub)) {
                $this->Flash->success(__('The bars nightclub has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bars nightclub could not be saved. Please, try again.'));
        }
        $mounths = $this->BarsNightclubs->Mounths->find('list', ['limit' => 200]);
        $users = $this->BarsNightclubs->Users->find('list', ['limit' => 200]);
        $this->set(compact('barsNightclub', 'mounths', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bars Nightclub id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barsNightclub = $this->BarsNightclubs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barsNightclub = $this->BarsNightclubs->patchEntity($barsNightclub, $this->request->getData());
            if ($this->BarsNightclubs->save($barsNightclub)) {
                $this->Flash->success(__('The bars nightclub has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bars nightclub could not be saved. Please, try again.'));
        }
        $mounths = $this->BarsNightclubs->Mounths->find('list', ['limit' => 200]);
        $users = $this->BarsNightclubs->Users->find('list', ['limit' => 200]);
        $this->set(compact('barsNightclub', 'mounths', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bars Nightclub id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barsNightclub = $this->BarsNightclubs->get($id);
        if ($this->BarsNightclubs->delete($barsNightclub)) {
            $this->Flash->success(__('The bars nightclub has been deleted.'));
        } else {
            $this->Flash->error(__('The bars nightclub could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
