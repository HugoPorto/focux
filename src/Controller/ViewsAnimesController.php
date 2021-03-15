<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ViewsAnimes Controller
 *
 * @property \App\Model\Table\ViewsAnimesTable $ViewsAnimes
 *
 * @method \App\Model\Entity\ViewsAnime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ViewsAnimesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Animes']
        ];
        $viewsAnimes = $this->paginate($this->ViewsAnimes);

        $this->set(compact('viewsAnimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Views Anime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $viewsAnime = $this->ViewsAnimes->get($id, [
            'contain' => ['Animes']
        ]);

        $this->set('viewsAnime', $viewsAnime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $viewsAnime = $this->ViewsAnimes->newEntity();
        if ($this->request->is('post')) {
            $viewsAnime = $this->ViewsAnimes->patchEntity($viewsAnime, $this->request->getData());
            if ($this->ViewsAnimes->save($viewsAnime)) {
                $this->Flash->success(__('The views anime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The views anime could not be saved. Please, try again.'));
        }
        $animes = $this->ViewsAnimes->Animes->find('list', ['limit' => 200]);
        $this->set(compact('viewsAnime', 'animes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Views Anime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $viewsAnime = $this->ViewsAnimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $viewsAnime = $this->ViewsAnimes->patchEntity($viewsAnime, $this->request->getData());
            if ($this->ViewsAnimes->save($viewsAnime)) {
                $this->Flash->success(__('The views anime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The views anime could not be saved. Please, try again.'));
        }
        $animes = $this->ViewsAnimes->Animes->find('list', ['limit' => 200]);
        $this->set(compact('viewsAnime', 'animes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Views Anime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $viewsAnime = $this->ViewsAnimes->get($id);
        if ($this->ViewsAnimes->delete($viewsAnime)) {
            $this->Flash->success(__('The views anime has been deleted.'));
        } else {
            $this->Flash->error(__('The views anime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
