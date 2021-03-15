<?php
namespace App\Controller;
use App\Controller\AppController;

class CoursesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(
            [
                'view2'
            ]);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('course', $course);
    }

    public function view2($id = null)
    {
        $this->loadModel('Menus');
        $this->loadModel('Footers');
        $menus = $this->Menus->find('all');
        $footers = $this->Footers->find('all')->first();   

        $course = $this->Courses->get($id, [
            'contain' => ['Users']
        ]);

        $this->set(compact(
            [
                'course',
                'menus',
                'footers'
            ]
        ));
    }

    public function add()
    {
        $course = $this->Courses->newEntity();
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

            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if ($this->Courses->save($course)) {
                $this->Flash->success2(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The course could not be saved. Please, try again.'));
        }
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'users'));
    }

    public function edit($id = null, $editImage = null)
    {
        $course = $this->Courses->get($id, [
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

            $course = $this->Courses->patchEntity($course, $this->request->getData());
            if ($this->Courses->save($course)) {
                $this->Flash->success2(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The course could not be saved. Please, try again.'));
        }
        $users = $this->Courses->Users->find('list', ['limit' => 200]);
        $this->set(compact('course', 'users', 'editImage'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if ($this->Courses->delete($course)) {
            $this->Flash->success2(__('The course has been deleted.'));
        } else {
            $this->Flash->error2(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}