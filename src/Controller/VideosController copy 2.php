<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class VideosController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(
            [
                'index', 
                'view', 
                'viewByCategory', 
                'addView', 
                'list', 
                'fixed',
                'test',
                'categorys'
            ]);
    }

    public function index()
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Publicitys');
        $this->loadModel('VideosRecomendados');
        $this->loadModel('VideosSponsoreds');
        $this->loadModel('Footers');
        $this->loadModel('CategoryPosts');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $categoryPosts = $this->CategoryPosts->find('all');
        
        $videosRecomendados = $this->VideosRecomendados->find('all', [
            // 'limit' => 10,
            'contain' => 'Videos',
            'order' => ['VideosRecomendados.id' => 'DESC'],
        ]);

        $videosSponsoreds = $this->VideosSponsoreds->find('all', [
            'limit' => 10,
            'contain' => 'Videos',
            'order' => ['VideosSponsoreds.id' => 'DESC'],
        ]);

        $videos = $this->Videos->find('all',[
            'conditions' => ['sponsored =' => 0],
            'contain' => ['CategoryVideos']
        ]);

        $this->paginate = [
			'order' => array(
				'Videos.id' => 'DESC',
			),
        ];

        $this->set(
            [
                'videos' => $this->paginate($videos),
                'categoryVideos' => $categoryVideos,
                'footers' => $footers,
                'videosRecomendados' => $videosRecomendados,
                'categoryPosts' => $categoryPosts,
                'videosSponsoreds' => $videosSponsoreds
            ]);

        // $videos = $this->paginate($this->Videos);

        

        // $this->set(compact('videos', 'categoryVideos', 'footers', 'videosRecomendados', 'categoryPosts', 'videosSponsoreds'));
    }

    public function list(){
        $this->maintenance();
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $videos = $this->Videos->find('all',[
                'contain' => ['CategoryVideos']
            ]);

            $this->set(compact('videos'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
            $this->maintenance();
            $this->viewBuilder()->setLayout('adminlte_videos_view');
            $this->loadModel('CategoryVideos');
            $this->loadModel('VideosRecomendados');
            $this->loadModel('Footers');
    
            if($this->Auth->user())
            {
                if($this->Roles->get($this->Auth->user()['roles_id'])->role !== 'admin' 
                && $this->Roles->get($this->Auth->user()['roles_id'])->role !== 'moderator'
                && $this->Roles->get($this->Auth->user()['roles_id'])->role == 'common')
                {
                    $idUser = $this->Auth->user()['id'];
                    $idVideo = $id;
                    $this->addView($idUser, $idVideo);
                }else{
                    $idUser = 8;
                    $idVideo = $id;
                    $this->addView($idUser, $idVideo);
                }
            }else{
                
                $idUser = 8;
                $idVideo = $id;
                $this->addView($idUser, $idVideo);
            }
              
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');
    
            $videosRecomendados = $this->VideosRecomendados->find('all', [
                'limit' => 4,
                'contain' => 'Videos',
                'order' => ['VideosRecomendados.id' => 'DESC'],
            ]);
    
            $video = $this->Videos->get($id, [
                'contain' => ['CategoryVideos']
            ]);
    
            $videosByCategory = $this->Videos->findByCategoryVideosId($video->category_video->id);
            $videosNode = $this->paginate($this->Videos->findByCategoryVideosId(30));
            $videosSwift = $this->paginate($this->Videos->findByCategoryVideosId(32));
            $videosPHP = $this->paginate($this->Videos->findByCategoryVideosId(20));
            $videosJS = $this->paginate($this->Videos->findByCategoryVideosId(31));
    
            $this->paginate = [
                'limit' => 3
            ];
    
            $this->set(
                [
                    'video' => $video, 
                    'footers' => $footers, 
                    'categoryVideos' => $categoryVideos,
                    'videosRecomendados' => $videosRecomendados,
                    'videosByCategory' => $this->paginate($videosByCategory),
                    'videosNode' => $videosNode,
                    'videosSwift' => $videosSwift,
                    'videosPHP' => $videosPHP,
                    'videosJS' => $videosJS,
                ]);
        
    }

    public function addView($idUser = null, $idVideo = null)
    {
        $this->maintenance();
        $videoViewsTable = TableRegistry::get('VideoViews');
        $videoView = $videoViewsTable->newEntity();
        $videoView->users_id = $idUser;
        $videoView->videos_id = $idVideo;
        $videoView->location = 'Não definido';
        $videoView->ip = 'Não definido';
        $videoView->browser = 'Não definido';

        if ($videoViewsTable->save($videoView)) {
            return $id = $videoView->id;
        }
    }

    public function addUserRegisterVideo($idUser = null, $idVideo = null)
    {
        $this->maintenance();
        $videoUserRegistersTable = TableRegistry::get('VideoUserRegisters');
        $videoUserRegister = $videoUserRegistersTable->newEntity();
        $videoUserRegister->users_id = $idUser;
        $videoUserRegister->videos_id = $idVideo;
        $videoUserRegister->location = 'Não definido';
        $videoUserRegister->ip = 'Não definido';
        $videoUserRegister->browser = 'Não definido';

        if ($videoUserRegistersTable->save($videoUserRegister)) {
            return $id = $videoUserRegister->id;
        }
    }

    public function viewByCategory($idCategory = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        if ($this->request->getQuery('idCategory')) {            
            $idCategory = $this->request->getQuery('idCategory');
            $this->loadModel('CategoryVideos');
            $this->loadModel('Footers');
    
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');
            $videos = $this->Videos->find('all', 
            [
                'conditions' => ['category_videos_id =' => $idCategory],
                'order' => array(
                    'Videos.id' => 'DESC',
                ),
            ]);
    
            $this->paginate = [
                'limit' => 7,
                'contain' => ['CategoryVideos']
            ];
    
            $this->set(
            [
                'videos' => $this->paginate($videos),
                'categoryVideos' => $categoryVideos,
                'footers' => $footers
            ]);

        }else{
            $this->loadModel('CategoryVideos');
            $this->loadModel('Footers');
    
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');
            $videos = $this->Videos->find('all', 
            [
                'conditions' => ['category_videos_id =' => $idCategory],
                'order' => array(
                    'Videos.id' => 'DESC',
                ),
            ]);
    
            $this->paginate = [
                'limit' => 7,
                'contain' => ['CategoryVideos']
            ];
    
            $this->set(
            [
                'videos' => $this->paginate($videos),
                'categoryVideos' => $categoryVideos,
                'footers' => $footers
            ]);
        }
    }

    public function add()
    {
        $this->maintenance();
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $video = $this->Videos->newEntity();
            if ($this->request->is('post')) {
    
                if(!empty($this->request->data['photo']['name']))
                {
                    $fileName = $this->request->data['photo']['name'];
                    $uploadPath = 'img/';
                    $uploadFile = $uploadPath.$fileName;
                    if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile)){
                        $this->request->data['photo'] = $fileName;
                    }
                }
    
                $video = $this->Videos->patchEntity($video, $this->request->getData());
    
                if ($this->Videos->save($video)) {
                    /**
                     * Register user with save the video
                     */
                    if($this->Auth->user())
                    {
                        $idUser = $this->Auth->user()['id'];
                        $idVideo = $video->id;
                        $this->addUserRegisterVideo($idUser, $idVideo);
                    }
                    else
                    {
                        $idUser = 8;
                        $idVideo = $video->id;
                        $this->addUserRegisterVideo($idUser, $idVideo);
                    }
                    
                    $this->Flash->success(__('The video has been saved.'));
    
                    if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
                    {
                        return $this->redirect(['action' => 'list']);
                    }
                    else
                    {
                        return $this->redirect(['action' => 'index']);
                    }                    
                }
    
                $this->Flash->error(__('The video could not be saved. Please, try again.'));
            }
    
            $categoryVideos = $this->Videos->CategoryVideos->find('list', ['limit' => 200]);
            $publicitys = $this->Videos->Publicitys->find('list', ['limit' => 200]);
            $this->set(compact('video', 'categoryVideos', 'publicitys'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null, $editImage = null)
    {
        $this->maintenance();
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $video = $this->Videos->get($id, [
                'contain' => []
            ]);
    
            if ($this->request->is(['patch', 'post', 'put'])) {
    
                if(!empty($this->request->data['photo']['name']))
                {
                    $fileName = $this->request->data['photo']['name'];
                    $uploadPath = 'img/';
                    $uploadFile = $uploadPath.$fileName;
                    if(move_uploaded_file($this->request->data['photo']['tmp_name'], $uploadFile)){
                        $this->request->data['photo'] = $fileName;
                    }
                }
    
                $video = $this->Videos->patchEntity($video, $this->request->getData());
    
                if ($this->Videos->save($video)) {
                    $this->Flash->success(__('The video has been saved.'));
    
                    return $this->redirect(['action' => 'list']);
                }
                $this->Flash->error(__('The video could not be saved. Please, try again.'));
            }
            else
            {
                if($editImage !== null)
                {
                    $categoryVideos = $this->Videos->CategoryVideos->find('list', ['limit' => 200]);
                    $publicitys = $this->Videos->Publicitys->find('list', ['limit' => 200]);
                    $this->set(compact('video', 'categoryVideos', 'publicitys', 'editImage'));
                }
                else
                {
                    $categoryVideos = $this->Videos->CategoryVideos->find('list', ['limit' => 200]);
                    $publicitys = $this->Videos->Publicitys->find('list', ['limit' => 200]);
                    $this->set(compact('video', 'categoryVideos', 'publicitys', 'editImage'));
                }
                
            }
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        $this->maintenance();
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $video = $this->Videos->get($id);
            if ($this->Videos->delete($video)) {
                $this->Flash->success(__('The video has been deleted.'));
            } else {
                $this->Flash->error(__('The video could not be deleted. Please, try again.'));
            }
    
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    /**
     * I need transform this method in one component...
     */
    public function maintenance(){
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }

    public function fixed(){

    }

    public function categorys()
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        
        $this->set(compact('categoryVideos', 'footers'));
    }
}
