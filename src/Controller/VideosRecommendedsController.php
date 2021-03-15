<?php
namespace App\Controller;
use App\Controller\AppController;

class VideosRecommendedsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

    public function index()
    {
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $this->paginate = [
            'contain' => ['Videos'],
            'order' => ['VideosRecomendados.id' => 'DESC'],
        ];

        $videosRecommendeds = $this->paginate($this->VideosRecommendeds);

        $this->set(compact('videosRecommendeds', 'footers', 'categoryVideos'));
    }

    public function view($id = null)
    {
        $videosRecommended = $this->VideosRecommendeds->get($id, [
            'contain' => ['Videos']
        ]);

        $this->set('videosRecommended', $videosRecommended);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $videosRecommended = $this->VideosRecommendeds->newEntity();
        if ($this->request->is('post')) {
            $videosRecommended = $this->VideosRecommendeds->patchEntity($videosRecommended, $this->request->getData());
            if ($this->VideosRecommendeds->save($videosRecommended)) {
                $this->Flash->success(__('The videos recommended has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The videos recommended could not be saved. Please, try again.'));
        }
        $videos = $this->VideosRecommendeds->Videos->find('list', ['limit' => 200]);
        $this->set(compact('videosRecommended', 'videos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Videos Recommended id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $videosRecommended = $this->VideosRecommendeds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosRecommended = $this->VideosRecommendeds->patchEntity($videosRecommended, $this->request->getData());
            if ($this->VideosRecommendeds->save($videosRecommended)) {
                $this->Flash->success(__('The videos recommended has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The videos recommended could not be saved. Please, try again.'));
        }
        $videos = $this->VideosRecommendeds->Videos->find('list', ['limit' => 200]);
        $this->set(compact('videosRecommended', 'videos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Videos Recommended id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosRecommended = $this->VideosRecommendeds->get($id);
        if ($this->VideosRecommendeds->delete($videosRecommended)) {
            $this->Flash->success(__('The videos recommended has been deleted.'));
        } else {
            $this->Flash->error(__('The videos recommended could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
