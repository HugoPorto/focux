<?php
namespace App\Controller;
use App\Controller\AppController;

class MenuCoursesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $menuCourses = $this->paginate($this->MenuCourses);
        $this->set(compact('menuCourses'));
    }
    public function view($id = null)
    {
        $menuCourse = $this->MenuCourses->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('menuCourse', $menuCourse);
    }
    public function add()
    {
        $menuCourse = $this->MenuCourses->newEntity();

        if ($this->request->is('post')) 
        {
            $menuCourse = $this->MenuCourses->patchEntity($menuCourse, $this->request->getData());

            if ($this->MenuCourses->save($menuCourse)) 
            {
                $this->Flash->success2(__('The menu course has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The menu course could not be saved. Please, try again.'));
        }
        $courses = $this->MenuCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('menuCourse', 'courses'));
    }
    public function edit($id = null)
    {
        $menuCourse = $this->MenuCourses->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $menuCourse = $this->MenuCourses->patchEntity($menuCourse, $this->request->getData());

            if ($this->MenuCourses->save($menuCourse)) 
            {
                $this->Flash->success2(__('The menu course has been saved.'));
                return $this->redirect(['action' => 'index']);
            }            
            $this->Flash->error2(__('The menu course could not be saved. Please, try again.'));
        }
        $courses = $this->MenuCourses->Courses->find('list', ['limit' => 200]);
        $this->set(compact('menuCourse', 'courses'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menuCourse = $this->MenuCourses->get($id);
        if ($this->MenuCourses->delete($menuCourse)) 
        {
            $this->Flash->success2(__('The menu course has been deleted.'));
        } 
        else 
        {
            $this->Flash->error2(__('The menu course could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
