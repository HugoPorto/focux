<?php
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Maintenance');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'logoutRedirect' => [
                'controller' => 'users', 'action' => 'login'
            ]

        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event){
        if($this->Auth->user('roles_id')){
            $this->loadModel('Roles');
            $role = $this->Roles->get($this->Auth->user('roles_id'));
            $roleDefined = $role->role;
        }else{
            $roleDefined = 'common';
        }

        $this->loadModel('MypreciousTitles');
        $this->loadModel('Subtitles');
        $this->loadModel('MyCourses');

        $titles = $this->MypreciousTitles->find('all')->first();
        $subtitles = $this->Subtitles->find('all')->first();
        // $myCourses = $this->MyCourses->find('all',
        // [
        //     'conditions' => [
        //         'MyCourses.users_id =' => $this->Auth->user('id')
        //     ]
        // ])->first();

        $this->set(
        [
            'username' => $this->Auth->user('username'),
            'role' => $roleDefined,
            'title' => $titles->title,
            'subtitle' => $subtitles->subtitle,
            // 'myCourses' => $myCourses
        ]);
    }
}
