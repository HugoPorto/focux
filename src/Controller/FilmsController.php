<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Films Controller
 *
 * @property \App\Model\Table\FilmsTable $Films
 *
 * @method \App\Model\Entity\Film[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilmsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $films = $this->Films->find('all', [
            'contain' => ['Genres'],
        ]);    

        $this->set(compact('films'));
    }

    /**
     * View method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $film = $this->Films->get($id, [
            'contain' => ['Genres']
        ]);

        $this->set('film', $film);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $film = $this->Films->newEntity();
        if ($this->request->is('post')) {
            $film = $this->Films->patchEntity($film, $this->request->getData());
            if ($this->Films->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }
        $genres = $this->Films->Genres->find('list', ['limit' => 200]);
        $this->set(compact('film', 'genres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $film = $this->Films->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $film = $this->Films->patchEntity($film, $this->request->getData());
            if ($this->Films->save($film)) {
                $this->Flash->success(__('The film has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The film could not be saved. Please, try again.'));
        }
        $genres = $this->Films->Genres->find('list', ['limit' => 200]);
        $this->set(compact('film', 'genres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Film id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $film = $this->Films->get($id);
        if ($this->Films->delete($film)) {
            $this->Flash->success(__('The film has been deleted.'));
        } else {
            $this->Flash->error(__('The film could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
