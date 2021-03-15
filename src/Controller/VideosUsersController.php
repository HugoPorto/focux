<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

class VideosUsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Maintenance');
        $this->loadComponent('UploadAndSaveImagesVideosUsers');
        $this->Auth->allow(['noVideos']);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'PlaylistUsers']
        ];

        $videosUsers = $this->paginate($this->VideosUsers);
        $this->set(compact('videosUsers'));
    }

    public function view($id = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos_view');
        $this->loadModel('CategoryVideos');
        $this->loadModel('VideosRecomendados');
        $this->loadModel('Footers');
        $this->loadModel('Videos');

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

        $videosUser = $this->VideosUsers->get($id, [
            'contain' => ['Users', 'PlaylistUsers']
        ]);       

        $videosByCategory = $this->VideosUsers->findByPlaylistUsersId($videosUser->playlist_users_id);
        $videosNode = $this->paginate($this->Videos->findByCategoryVideosId(30));
        $videosSwift = $this->paginate($this->Videos->findByCategoryVideosId(32));
        $videosPHP = $this->paginate($this->Videos->findByCategoryVideosId(20));

        $this->paginate = [
            'limit' => 5
        ];

        $this->set(
            [
                'videosUser' => $videosUser,
                'footers' => $footers, 
                'categoryVideos' => $categoryVideos,
                'videosRecomendados' => $videosRecomendados,
                'videosByCategory' => $this->paginate($videosByCategory),
                'videosNode' => $videosNode,
                'videosSwift' => $videosSwift,
                'videosPHP' => $videosPHP
            ]);
    }

    public function viewByUser($username = null)
    {     
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');        
        $user = $this->Users->findByUsername($username)->firstOrFail();   

        $this->paginate = [
            'contain' => 
            [
                'Users',
                'PlaylistUsers',
            ]
        ];

        $videosUser = $this->paginate($this->VideosUsers->find('all')->where(['VideosUsers.users_id =' => $user->id]));
        $update = $this->Maintenance->getUpdate(); 

        $this->set([
            'videosUser' => $videosUser,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos,
            'update' => $update
            ]);
    }

    public function add($username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');

        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $this->loadModel('PlaylistUsers');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $playlistUsers = $this->PlaylistUsers->find('all')->where(['PlaylistUsers.users_id =' => $user->id]);
        

        if(sizeof($playlistUsers->toArray()) == 0)
        {
            return $this->redirect(['controller' => 'playlistUsers', 'action' => 'viewByUser', $username]);
        }


        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $videosUser = $this->VideosUsers->newEntity();

        if ($this->request->is('post')) 
        {
            $this->UploadAndSaveImagesVideosUsers->upload(
                $this->request->data, 
                $this->request->data['galerys_id'], 
                $this->request->data['users_id'],
                $username
            );
        }

        $users = $this->VideosUsers->Users->find('list', ['limit' => 200]);        
        $playlistUsers = $this->VideosUsers->PlaylistUsers->find('list', [
            'conditions' => ['PlaylistUsers.users_id = ' => $user->id],
            'limit' => 500
        ]);
        $this->set(compact('videosUser', 'users', 'playlistUsers', 'user', 'footers', 'categoryVideos'));
    }

    public function edit($id = null, $username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $videosUser = $this->VideosUsers->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosUser = $this->VideosUsers->patchEntity($videosUser, $this->request->getData());
            if ($this->VideosUsers->save($videosUser)) {
                $this->Flash->success(__('The videos user has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The videos user could not be saved. Please, try again.'));
        }
        $users = $this->VideosUsers->Users->find('list', ['limit' => 200]);
        $user = $this->Users->findByUsername($username)->firstOrFail();
        $playlistUsers = $this->VideosUsers->PlaylistUsers->find('list', ['limit' => 200]);
        $this->set(compact('videosUser', 'users', 'playlistUsers', 'footers'  , 'categoryVideos', 'user'));
    }

    public function delete($id = null, $username)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosUser = $this->VideosUsers->get($id, [
            'contain' => []
        ]);
        $this->deletePhoto($videosUser->photo);
        $videosUser = $this->VideosUsers->get($id);

        if ($this->VideosUsers->delete($videosUser)) {
            $this->Flash->success(__('The videos user has been deleted.'));
        } else {
            $this->Flash->error(__('The videos user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'viewByUser', $username]);
    }

    public function maintenance()
    {
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
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

    public function updatePhoto($id = null, $username = null)
    {
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('ImageProfiles');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
         $videosUser = $this->VideosUsers->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->deletePhoto($videosUser->photo);
            $this->UploadAndSaveImagesVideosUsers->uploadUpdatePhoto(
                $this->request->data, 
                $this->request->data['galerys_id'], 
                $this->request->data['users_id'],
                $username,
                $videosUser
            );
        }

        $users = $this->VideosUsers->Users->find('list', ['limit' => 200]);
        $user = $this->Users->findByUsername($username)->firstOrFail();
        $playlistUsers = $this->VideosUsers->PlaylistUsers->find('list', ['limit' => 200]);
        $this->set(compact('videosUser', 'users', 'playlistUsers', 'footers'  , 'categoryVideos', 'user'));
    }

    public function deletePhoto($image = null)
    {
        $galery = 3;
        $filename = $image;
        $dir = WWW_ROOT.'img'.DS.'galerys'.DS.$galery.DS.$filename;

        $file = new File($dir);
        $file->delete();
        $file->close();
    }

    public function noVideos()
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
