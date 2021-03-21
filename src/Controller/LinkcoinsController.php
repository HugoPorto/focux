<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Linkcoins Controller
 *
 * @property \App\Model\Table\LinkcoinsTable $Linkcoins
 *
 * @method \App\Model\Entity\Linkcoin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LinkcoinsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Coins']
        ];
        $linkcoins = $this->paginate($this->Linkcoins);

        $this->set(compact('linkcoins'));
    }

    /**
     * View method
     *
     * @param string|null $id Linkcoin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $linkcoin = $this->Linkcoins->get($id, [
            'contain' => ['Coins']
        ]);

        $this->set('linkcoin', $linkcoin);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $linkcoin = $this->Linkcoins->newEntity();
        if ($this->request->is('post')) {
            $linkcoin = $this->Linkcoins->patchEntity($linkcoin, $this->request->getData());
            if ($this->Linkcoins->save($linkcoin)) {
                $this->Flash->success(__('The linkcoin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The linkcoin could not be saved. Please, try again.'));
        }
        $coins = $this->Linkcoins->Coins->find('list', ['limit' => 200]);
        $this->set(compact('linkcoin', 'coins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Linkcoin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $linkcoin = $this->Linkcoins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $linkcoin = $this->Linkcoins->patchEntity($linkcoin, $this->request->getData());
            if ($this->Linkcoins->save($linkcoin)) {
                $this->Flash->success(__('The linkcoin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The linkcoin could not be saved. Please, try again.'));
        }
        $coins = $this->Linkcoins->Coins->find('list', ['limit' => 200]);
        $this->set(compact('linkcoin', 'coins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Linkcoin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linkcoin = $this->Linkcoins->get($id);
        if ($this->Linkcoins->delete($linkcoin)) {
            $this->Flash->success(__('The linkcoin has been deleted.'));
        } else {
            $this->Flash->error(__('The linkcoin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
