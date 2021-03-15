<?php
namespace App\Controller;
use App\Controller\AppController;

class CategoryPostsController extends AppController
{
    public function index()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryPosts = $this->paginate($this->CategoryPosts);
            $this->set(compact('categoryPosts'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function view($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryPost = $this->CategoryPosts->get($id, [
                'contain' => []
            ]);
            $this->set('categoryPost', $categoryPost);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function add()
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryPost = $this->CategoryPosts->newEntity();

            if ($this->request->is('post')) 
            {
                $categoryPost = $this->CategoryPosts->patchEntity($categoryPost, $this->request->getData());

                if ($this->CategoryPosts->save($categoryPost)) 
                {
                    $this->Flash->success2(__('The category post has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The category post could not be saved. Please, try again.'));
            }
            $this->set(compact('categoryPost'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function edit($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $categoryPost = $this->CategoryPosts->get($id, [
                'contain' => []
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) 
            {
                $categoryPost = $this->CategoryPosts->patchEntity($categoryPost, $this->request->getData());

                if ($this->CategoryPosts->save($categoryPost)) 
                {
                    $this->Flash->success2(__('The category post has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error2(__('The category post could not be saved. Please, try again.'));
            }
            $this->set(compact('categoryPost'));
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
    public function delete($id = null)
    {
        if($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin' || $this->Roles->get($this->Auth->user()['roles_id'])->role == 'root')
        {
            $this->request->allowMethod(['post', 'delete']);
            $categoryPost = $this->CategoryPosts->get($id);

            if ($this->CategoryPosts->delete($categoryPost)) 
            {
                $this->Flash->success2(__('The category post has been deleted.'));
            } 
            else 
            {
                $this->Flash->error2(__('The category post could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
        else
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}
