<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Anvideos Controller
 *
 * @property \App\Model\Table\AnvideosTable $Anvideos
 *
 * @method \App\Model\Entity\Anvideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnvideosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Animes', 'Seans']
        ];
        $anvideos = $this->paginate($this->Anvideos);

        $this->set(compact('anvideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Anvideo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anvideo = $this->Anvideos->get($id, [
            'contain' => ['Animes', 'Seans']
        ]);

        $this->set('anvideo', $anvideo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anvideo = $this->Anvideos->newEntity();
        if ($this->request->is('post')) {
            $anvideo = $this->Anvideos->patchEntity($anvideo, $this->request->getData());
            if ($this->Anvideos->save($anvideo)) {
                $this->Flash->success(__('The anvideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anvideo could not be saved. Please, try again.'));
        }
        $animes = $this->Anvideos->Animes->find('list', ['limit' => 200]);
        $seans = $this->Anvideos->Seans->find('list', ['limit' => 200]);
        $this->set(compact('anvideo', 'animes', 'seans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Anvideo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anvideo = $this->Anvideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anvideo = $this->Anvideos->patchEntity($anvideo, $this->request->getData());
            if ($this->Anvideos->save($anvideo)) {
                $this->Flash->success(__('The anvideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anvideo could not be saved. Please, try again.'));
        }
        $animes = $this->Anvideos->Animes->find('list', ['limit' => 200]);
        $seans = $this->Anvideos->Seans->find('list', ['limit' => 200]);
        $this->set(compact('anvideo', 'animes', 'seans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Anvideo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anvideo = $this->Anvideos->get($id);
        if ($this->Anvideos->delete($anvideo)) {
            $this->Flash->success(__('The anvideo has been deleted.'));
        } else {
            $this->Flash->error(__('The anvideo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addvideos($sean, $anime){
        $anvideo = $this->Anvideos->newEntity();
        if ($this->request->is('post')) {
            $anvideo = $this->Anvideos->patchEntity($anvideo, $this->request->getData());
            if ($this->Anvideos->save($anvideo)) {
                $this->Flash->success(__('The animevideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animevideo could not be saved. Please, try again.'));
        }
        $animes = $this->Anvideos->Animes->find('list', 
        [
            'conditions' => ['id =' => $anime],
            'limit' => 50000
        ]);
        $seans = $this->Anvideos->Seans->find('list', 
            [
                'conditions' => ['animes_id =' => $anime],
                'limit' => 200
            ]);
        $this->set(compact('anvideo', 'animes', 'seans'));
    }
}
