<?php
namespace App\Controller;
use App\Controller\AppController;

class PostsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Publicitys');
        $this->loadModel('VideosRecomendados');
        $this->loadModel('CategoryPosts');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $categoryPosts = $this->CategoryPosts->find('all');
        
        $this->paginate = [
            'contain' => ['CategoryPosts', 'Publicitys']
        ];

        $posts = $this->paginate($this->Posts);

        $this->log($posts->toArray(), LOG_DEBUG);

        $this->set(compact('posts', 'categoryVideos', 'footers', 'videosRecomendados', 'categoryPosts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['CategoryPosts', 'Publicitys']
        ]);

        $this->set('post', $post);
    }

    public function viewx($id = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos_view');
        $this->loadModel('Footers');
        $footers = $this->Footers->find('all')->first();
        
        $post = $this->Posts->get($id, [
            'contain' => ['CategoryPosts', 'Publicitys']
        ]);

        $this->set(['post' => $post, 'footers' => $footers]);
    }

    public function list(){
        $this->paginate = [
            'contain' => ['CategoryPosts', 'Publicitys']
        ];
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts')); 
    }

    public function add()
    {
        $post = $this->Posts->newEntity();
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

            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $categoryPosts = $this->Posts->CategoryPosts->find('list', ['limit' => 200]);
        $publicitys = $this->Posts->Publicitys->find('list', ['limit' => 200]);
        $this->set(compact('post', 'categoryPosts', 'publicitys'));
    }

    public function viewByCategory($idCategory = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        if ($this->request->getQuery('idCategory')) {            
            $idCategory = $this->request->getQuery('idCategory');
            $this->loadModel('CategoryPosts');
            $this->loadModel('Footers');
    
            $footers = $this->Footers->find('all')->first();
            $CategoryPosts = $this->CategoryPosts->find('all');
            $posts = $this->Posts->find('all', 
            [
                'conditions' => ['category_posts_id =' => $idCategory],
                'order' => array(
                    'Posts.id' => 'DESC',
                ),
            ]);
    
            $this->paginate = [
                'limit' => 7,
                'contain' => ['CategoryPosts']
            ];
    
            $this->set(
            [
                'posts' => $this->paginate($posts),
                'categoryPosts' => $categoryPosts,
                'footers' => $footers
            ]);

        }else{
            $this->loadModel('CategoryPosts');
            $this->loadModel('Footers');
    
            $footers = $this->Footers->find('all')->first();
            $categoryPosts = $this->CategoryPosts->find('all');
            $posts = $this->Posts->find('all', 
            [
                'conditions' => ['category_posts_id =' => $idCategory],
                'order' => array(
                    'Posts.id' => 'DESC',
                ),
            ]);
    
            $this->paginate = [
                'limit' => 7,
                'contain' => ['CategoryPosts']
            ];
    
            $this->set(
            [
                'posts' => $this->paginate($posts),
                'categoryPosts' => $categoryPosts,
                'footers' => $footers
            ]);
        }
    }

    public function edit($id = null, $editImage = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $post = $this->Posts->get($id, [
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

                $post = $this->Posts->patchEntity($post, $this->request->getData());
                if ($this->Posts->save($post)) {
                    $this->Flash->success(__('The post has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The post could not be saved. Please, try again.'));
            }
            else
            {
                if($editImage !== null)
                {
                    $categoryPosts = $this->Posts->CategoryPosts->find('list', ['limit' => 200]);
                    $publicitys = $this->Posts->Publicitys->find('list', ['limit' => 200]);
                    $this->set(compact('post', 'categoryPosts', 'publicitys', 'editImage'));
                }
                else
                {
                    $categoryPosts = $this->Posts->CategoryPosts->find('list', ['limit' => 200]);
                    $publicitys = $this->Posts->Publicitys->find('list', ['limit' => 200]);
                    $this->set(compact('post', 'categoryPosts', 'publicitys', 'editImage'));
                }
            }
        }
        else
        {
            return $this->redirect(['controller' => 'posts', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function maintenance(){
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }
}
