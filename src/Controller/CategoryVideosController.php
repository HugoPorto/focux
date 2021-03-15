<?php
namespace App\Controller;
use App\Controller\AppController;

class CategoryVideosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow('listAll');
    }

    public function index()
    {   
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryVideos = $this->paginate($this->CategoryVideos);
            $this->set(compact('categoryVideos'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryVideo = $this->CategoryVideos->get($id, [
                'contain' => []
            ]);
    
            $this->set('categoryVideo', $categoryVideo);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin'
        || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryVideo = $this->CategoryVideos->newEntity();
            if ($this->request->is('post')) {
                $categoryVideo = $this->CategoryVideos->patchEntity($categoryVideo, $this->request->getData());
                if ($this->CategoryVideos->save($categoryVideo)) {
                    $this->Flash->success2(__('The category video has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The category video could not be saved. Please, try again.'));
            }
            $this->set(compact('categoryVideo'));
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
            $categoryVideo = $this->CategoryVideos->get($id, [
                'contain' => []
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) {
                $categoryVideo = $this->CategoryVideos->patchEntity($categoryVideo, $this->request->getData());
                if ($this->CategoryVideos->save($categoryVideo)) {
                    $this->Flash->success2(__('The category video has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The category video could not be saved. Please, try again.'));
            }
            $this->set(compact('categoryVideo'));
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
            $categoryVideo = $this->CategoryVideos->get($id);
            if ($this->CategoryVideos->delete($categoryVideo)) {
                $this->Flash->success2(__('The category video has been deleted.'));
            } else {
                $this->Flash->error2(__('The category video could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function listAll()
    {
        $this->autoRender = false;        
        if(!isset($_POST['searchTerm'])){
            $categoryVideos = $this->CategoryVideos->find('all', [
                'fields' => ['id', 'category']
            ]);
        }else{ 
            $search = $_POST['searchTerm'];   
            $categoryVideos = $this->CategoryVideos->find('all', [
                'fields' => ['id', 'category'],
                'conditions' => 
                    [
                        'CategoryVideos.category LIKE "%'. $search . '%"'
                    ],
                'order' => array(
                    'CategoryVideos.id' => 'DESC',
                    )
                ]);
        }     

        $categoryVideosArray = array(
			'items' => array()
		);

        foreach ($categoryVideos as $id => $categoryVideo) {
			$categoryVideosArray['items'][$id] = array(
				'id' => $categoryVideo->id,
				'text' => $categoryVideo->category,
			);
		}

        echo json_encode($categoryVideosArray['items']);
        die();
    }
}
