<?php
namespace App\Controller;
use App\Controller\AppController;

class AboutsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['view']);
    }
    public function index()
    {
        $this->maintenance();
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' 
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $abouts = $this->paginate($this->Abouts);
            $this->set(compact('abouts'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $about = $this->Abouts->get($id, [
            'contain' => []
        ]);

        $this->set(['about' => $about, 'categoryVideos' => $categoryVideos, 'footers' => $footers]);
    }
    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $about = $this->Abouts->newEntity();
            if ($this->request->is('post')) {
                $about = $this->Abouts->patchEntity($about, $this->request->getData());
                if ($this->Abouts->save($about)) {
                    $this->Flash->success(__('The about has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The about could not be saved. Please, try again.'));
            }
            $this->set(compact('about'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $about = $this->Abouts->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $about = $this->Abouts->patchEntity($about, $this->request->getData());
                if ($this->Abouts->save($about)) {
                    $this->Flash->success2(__('The about has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The about could not be saved. Please, try again.'));
            }
            $this->set(compact('about'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function delete($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $about = $this->Abouts->get($id);
            if ($this->Abouts->delete($about)) {
                $this->Flash->success2(__('The about has been deleted.'));
            } else {
                $this->Flash->error2(__('The about could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function maintenance()
    {
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();

        if ($maintenances->status == 1) 
        {
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }
}
