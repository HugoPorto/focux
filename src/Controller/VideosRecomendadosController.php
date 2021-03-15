<?php
namespace App\Controller;

use App\Controller\AppController;

class VideosRecomendadosController extends AppController
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

        $videosRecomendados = $this->paginate($this->VideosRecomendados);

        $this->set(compact('videosRecomendados', 'footers', 'categoryVideos'));
    }

    public function view($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $videosRecomendado = $this->VideosRecomendados->get($id, [
                'contain' => ['Videos'],
            ]);

            $this->set('videosRecomendado', $videosRecomendado);
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function add()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $videosRecomendado = $this->VideosRecomendados->newEntity();

            if ($this->request->is('post')) {
                $videosRecomendado = $this->VideosRecomendados->patchEntity($videosRecomendado, $this->request->getData());
                if ($this->VideosRecomendados->save($videosRecomendado)) {
                    $this->Flash->success2(__('The videos recomendado has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }

                $this->Flash->error2(__('The videos recomendado could not be saved. Please, try again.'));
            }

            $videos = $this->VideosRecomendados->Videos->find('list', ['limit' => 200]);

            $this->set(compact('videosRecomendado', 'videos'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $videosRecomendado = $this->VideosRecomendados->get($id, [
                'contain' => [],
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $videosRecomendado = $this->VideosRecomendados->patchEntity($videosRecomendado, $this->request->getData());

                if ($this->VideosRecomendados->save($videosRecomendado)) {
                    $this->Flash->success2(__('The videos recomendado has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }

                $this->Flash->error2(__('The videos recomendado could not be saved. Please, try again.'));
            }

            $videos = $this->VideosRecomendados->Videos->find('list', ['limit' => 200]);

            $this->set(compact('videosRecomendado', 'videos'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $this->request->allowMethod(['post', 'delete']);
            $videosRecomendado = $this->VideosRecomendados->get($id);

            if ($this->VideosRecomendados->delete($videosRecomendado)) {
                $this->Flash->success2(__('The videos recomendado has been deleted.'));
            } else {
                $this->Flash->error2(__('The videos recomendado could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function list() {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $this->paginate = [
                'contain' => ['Videos'],
            ];

            $videosRecomendados = $this->paginate($this->VideosRecomendados);

            $this->set(compact('videosRecomendados'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
