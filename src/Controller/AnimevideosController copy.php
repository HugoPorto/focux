<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animevideos Controller
 *
 * @property \App\Model\Table\AnimevideosTable $Animevideos
 *
 * @method \App\Model\Entity\Animevideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimevideosController extends AppController
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
        $animevideos = $this->paginate($this->Animevideos);

        $this->set(compact('animevideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Animevideo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animevideo = $this->Animevideos->get($id, [
            'contain' => ['Animes', 'Seans']
        ]);

        $this->set('animevideo', $animevideo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animevideo = $this->Animevideos->newEntity();
        if ($this->request->is('post')) {
            $animevideo = $this->Animevideos->patchEntity($animevideo, $this->request->getData());
            if ($this->Animevideos->save($animevideo)) {
                $this->Flash->success(__('The animevideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animevideo could not be saved. Please, try again.'));
        }
        $animes = $this->Animevideos->Animes->find('list', ['limit' => 200]);
        $seans = $this->Animevideos->Seans->find('list', ['limit' => 200]);
        $this->set(compact('animevideo', 'animes', 'seans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Animevideo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animevideo = $this->Animevideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animevideo = $this->Animevideos->patchEntity($animevideo, $this->request->getData());
            if ($this->Animevideos->save($animevideo)) {
                $this->Flash->success(__('The animevideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animevideo could not be saved. Please, try again.'));
        }
        $animes = $this->Animevideos->Animes->find('list', ['limit' => 200]);
        $seans = $this->Animevideos->Seans->find('list', ['limit' => 200]);
        $this->set(compact('animevideo', 'animes', 'seans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Animevideo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animevideo = $this->Animevideos->get($id);
        if ($this->Animevideos->delete($animevideo)) {
            $this->Flash->success(__('The animevideo has been deleted.'));
        } else {
            $this->Flash->error(__('The animevideo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function addvideos($sean, $anime){
        $animevideo = $this->Animevideos->newEntity();
        if ($this->request->is('post')) {
            $animevideo = $this->Animevideos->patchEntity($animevideo, $this->request->getData());
            if ($this->Animevideos->save($animevideo)) {
                $this->Flash->success(__('The animevideo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The animevideo could not be saved. Please, try again.'));
        }
        $animes = $this->Animevideos->Animes->find('list', ['limit' => 200]);
        $seans = $this->Animevideos->Seans->find('list', 
            [
                'conditions' => ['animes_id =' => $anime],
                'limit' => 200
            ]);
        $this->set(compact('animevideo', 'animes', 'seans'));
    }
}
