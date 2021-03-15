<?php
namespace App\Controller;
use App\Controller\AppController;

class MyCoursesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Courses']
        ];
        $myCourses = $this->paginate($this->MyCourses);
        $this->set(compact('myCourses'));
    }
    public function view($id = null)
    {
        $myCourse = $this->MyCourses->get($id, [
            'contain' => ['Users', 'Courses']
        ]);
        $this->set('myCourse', $myCourse);
    }
    public function add()
    {
        $myCourse = $this->MyCourses->newEntity();

        if ($this->request->is('post')) 
        {
            $myCourse = $this->MyCourses->patchEntity($myCourse, $this->request->getData());

            if ($this->MyCourses->save($myCourse)) 
            {
                $this->Flash->success2(__('The my course has been saved.'));
                return $this->redirect(['action' => 'index']);
            }            
            $this->Flash->error2(__('The my course could not be saved. Please, try again.'));
        }
        $users = $this->MyCourses->Users->find('list', ['limit' => 200]);
        $courses = $this->MyCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('myCourse', 'users', 'courses'));
    }
    public function edit($id = null)
    {
        $myCourse = $this->MyCourses->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $myCourse = $this->MyCourses->patchEntity($myCourse, $this->request->getData());

            if ($this->MyCourses->save($myCourse)) 
            {
                $this->Flash->success2(__('The my course has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The my course could not be saved. Please, try again.'));
        }
        $users = $this->MyCourses->Users->find('list', ['limit' => 200]);
        $courses = $this->MyCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('myCourse', 'users', 'courses'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myCourse = $this->MyCourses->get($id);
        if ($this->MyCourses->delete($myCourse)) 
        {
            $this->Flash->success2(__('The my course has been deleted.'));
        } 
        else 
        {
            $this->Flash->error2(__('The my course could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
