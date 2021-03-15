<?php
namespace App\Controller;

use App\Controller\AppController;

class VideosSponsoredsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Videos'],
        ];
        $videosSponsoreds = $this->paginate($this->VideosSponsoreds);

        $this->set(compact('videosSponsoreds'));
    }

    public function view($id = null)
    {
        $videosSponsored = $this->VideosSponsoreds->get($id, [
            'contain' => ['Videos'],
        ]);

        $this->set('videosSponsored', $videosSponsored);
    }

    public function add()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $videosSponsored = $this->VideosSponsoreds->newEntity();
            if ($this->request->is('post')) {
                $videosSponsored = $this->VideosSponsoreds->patchEntity($videosSponsored, $this->request->getData());
                if ($this->VideosSponsoreds->save($videosSponsored)) {
                    $this->Flash->success(__('The videos sponsored has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The videos sponsored could not be saved. Please, try again.'));
            }
            $videos = $this->VideosSponsoreds->Videos->find('list', ['limit' => 200]);
            $this->set(compact('videosSponsored', 'videos'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
            || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $videosSponsored = $this->VideosSponsoreds->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $videosSponsored = $this->VideosSponsoreds->patchEntity($videosSponsored, $this->request->getData());
                if ($this->VideosSponsoreds->save($videosSponsored)) {
                    $this->Flash->success(__('The videos sponsored has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The videos sponsored could not be saved. Please, try again.'));
            }
            $videos = $this->VideosSponsoreds->Videos->find('list', ['limit' => 200]);
            $this->set(compact('videosSponsored', 'videos'));
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') {
            $this->request->allowMethod(['post', 'delete']);
            $videosSponsored = $this->VideosSponsoreds->get($id);
            if ($this->VideosSponsoreds->delete($videosSponsored)) {
                $this->Flash->success(__('The videos sponsored has been deleted.'));
            } else {
                $this->Flash->error(__('The videos sponsored could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        } else {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
