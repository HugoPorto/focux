<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coins Controller
 *
 * @property \App\Model\Table\CoinsTable $Coins
 *
 * @method \App\Model\Entity\Coin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoinsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $coins = $this->paginate($this->Coins);

        $this->set(compact('coins'));
    }

    /**
     * View method
     *
     * @param string|null $id Coin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coin = $this->Coins->get($id, [
            'contain' => []
        ]);

        $this->set('coin', $coin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coin = $this->Coins->newEntity();
        if ($this->request->is('post')) {
            $coin = $this->Coins->patchEntity($coin, $this->request->getData());
            if ($this->Coins->save($coin)) {
                $this->Flash->success(__('The coin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coin could not be saved. Please, try again.'));
        }
        $this->set(compact('coin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coin = $this->Coins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coin = $this->Coins->patchEntity($coin, $this->request->getData());
            if ($this->Coins->save($coin)) {
                $this->Flash->success(__('The coin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coin could not be saved. Please, try again.'));
        }
        $this->set(compact('coin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coin = $this->Coins->get($id);
        if ($this->Coins->delete($coin)) {
            $this->Flash->success(__('The coin has been deleted.'));
        } else {
            $this->Flash->error(__('The coin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
