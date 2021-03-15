<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animes Controller
 *
 * @property \App\Model\Table\AnimesTable $Animes
 *
 * @method \App\Model\Entity\Anime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnimesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $animes = $this->paginate($this->Animes);

        $this->set(compact('animes'));
    }

    /**
     * View method
     *
     * @param string|null $id Anime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $anime = $this->Animes->get($id, [
            'contain' => []
        ]);

        $this->set('anime', $anime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $anime = $this->Animes->newEntity();
        if ($this->request->is('post')) {
            $anime = $this->Animes->patchEntity($anime, $this->request->getData());
            if ($this->Animes->save($anime)) {
                $this->Flash->success(__('The anime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anime could not be saved. Please, try again.'));
        }
        $this->set(compact('anime'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Anime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $anime = $this->Animes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $anime = $this->Animes->patchEntity($anime, $this->request->getData());
            if ($this->Animes->save($anime)) {
                $this->Flash->success(__('The anime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The anime could not be saved. Please, try again.'));
        }
        $this->set(compact('anime'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Anime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $anime = $this->Animes->get($id);
        if ($this->Animes->delete($anime)) {
            $this->Flash->success(__('The anime has been deleted.'));
        } else {
            $this->Flash->error(__('The anime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
