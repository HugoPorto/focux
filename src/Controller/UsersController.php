<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Filesystem\File;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('UploadImageProfile');
        $this->Auth->allow(
            [
                'register',
                'register2',
                'update'
            ]);
    }

    public function index()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
        {
            $users = $this->Users->find('all', [
                'contain' => ['Roles']
            ]);

            $this->set(compact('users'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles'],
        ]);
        $this->set('user', $user);
    }

    public function add()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
        {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function edit($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
        {
            $user = $this->Users->get($id, [
                'contain' => [],
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function delete($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
        {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);

            if ($this->Users->delete($user)) 
            {
                $this->Flash->success(__('The user has been deleted.'));
            } 
            else 
            {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function login()
    {
        if (!$this->Auth->user()) 
        {
            if ($this->request->is('post')) 
            {
                $user = $this->Auth->identify();

                if ($user) 
                {
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Users', 'action' => 'mainmenu']);
                }
                $this->Flash->error(__('Nome de usuário ou password inválido...'));
            }
        }
        else
        {
            return $this->redirect(['controller' => 'pages', 'action' => 'index']);
        }
    }

    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }
    
    public function mainmenu()
    {
        {
            if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'admin') 
            {
                $this->loadModel('Tablesadmins');
                $this->loadModel('Logos');
                $tablesadmins = $this->Tablesadmins->find('all');
                $logos = $this->Logos->find('all');
                $this->set(compact(
                    [
                        'tablesadmins',
                        'logos',
                    ]
                ));
            } 
            elseif ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
            {
                return $this->redirect(['controller' => 'users', 'action' => 'mainmenuroot']);
            } 
            elseif ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'colibri') 
            {
                return $this->redirect(['controller' => 'users', 'action' => 'colibri']);
            } 
            elseif ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'tubex') 
            {
                return $this->redirect(['controller' => 'users', 'action' => 'mainmenutubex']);
            } 
            elseif ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'vendas_amc') 
            {
                return $this->redirect(['controller' => 'users', 'action' => 'amc']);
            } 
            else 
            {
                return $this->redirect(['controller' => 'videos', 'action' => 'index']);
            }
        }
    }

    public function register()
    {
        if (!$this->Auth->user()) 
        {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function register2()
    {
        if (!$this->Auth->user()) 
        {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'pages', 'action' => 'index']);
        }
    }

    public function profile($userName = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'common') 
        {
            $this->viewBuilder()->setLayout('adminlte_videos');
            $this->loadModel('CategoryVideos');
            $this->loadModel('Publicitys');
            $this->loadModel('Footers');
            $this->loadModel('ImageProfiles');
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');
            $user = $this->Users->findByUsername($userName)->firstOrFail();

            if ($this->ImageProfiles->find('all')->where(['ImageProfiles.users_id =' => $user->id])->first() != null) 
            {
                $imageProfile = $this->ImageProfiles->find('all')->where(['ImageProfiles.users_id =' => $user->id])->firstOrFail();
            } 
            else 
            {
                $imageProfile = [];
            }
            $imageProfileUserAnonymous = null;

            if (!sizeof($imageProfile)) 
            {
                $userAnonymous = $this->Users->find('all')->where(['Users.roles_id =' => 4])->firstOrFail();
                $imageProfile = $this->ImageProfiles->find('all')->where(['ImageProfiles.users_id =' => $userAnonymous->id])->firstOrFail();
            }
            if ($userName == $this->Auth->user('username')) 
            {
                $usernameEdit = true;
            } 
            else
            {
                $usernameEdit = false;
            }
            $this->set(
                [
                    'user' => $user,
                    'usernameEdit' => $usernameEdit,
                    'footers' => $footers,
                    'categoryVideos' => $categoryVideos,
                    'imageProfile' => $imageProfile,
                    'page' => 'profile',
                ]);
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function editcommon($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'common') 
        {
            $this->viewBuilder()->setLayout('adminlte_videos');
            $this->loadModel('CategoryVideos');
            $this->loadModel('Publicitys');
            $this->loadModel('Footers');
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');
            $user = $this->Users->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                
                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles', 'footers', 'categoryVideos'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function deletecommon($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'common') 
        {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);

            if ($this->Users->delete($user)) 
            {
                $this->Flash->success(__('The user has been deleted.'));
                $this->Auth->logout();
            } 
            else 
            {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function mainmenuroot()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'root') 
        {
            $this->loadModel('Tablesroots');
            $this->loadModel('Logos');
            $tablesroots = $this->Tablesroots->find('all');
            $logos = $this->Logos->find('all');
            $this->set(compact(
                [
                    'tablesroots',
                    'logos',
                ]
            ));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function colibri()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'colibri') 
        {
            $this->loadModel('Tablescolibris');
            $this->loadModel('Logos');
            $tablescolibris = $this->Tablescolibris->find('all');
            $logos = $this->Logos->find('all');
            $this->set(compact(
                [
                    'tablescolibris',
                    'logos',
                ]
            ));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function amc()
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'vendas_amc') 
        {
            $this->loadModel('Tablesamc');
            $this->loadModel('Logos');
            $tablesamc = $this->Tablesamc->find('all');
            $logos = $this->Logos->find('all');
            $this->set(compact(
                [
                    'tablesamc',
                    'logos',
                ]
            ));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function mainmenutubex(){
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'tubex') 
        {
            $this->loadModel('Tablestubex');
            $this->loadModel('Animes');
            $this->loadModel('Films');
            $this->loadModel('Series');
            $this->loadModel('Comics');
            $tablestubex = $this->Tablestubex->find('all');
            $animes = $this->Animes->find('all')->count();
            $films = $this->Films->find('all')->count();
            $series = $this->Series->find('all')->count();
            $comics = $this->Comics->find('all')->count();

            $this->set(compact(
                [
                    'tablestubex',
                    'animes',
                    'films',
                    'series',
                    'comics',
                ]
            ));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }

    public function updatePhoto($id = null, $userName = null)
    {
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('ImageProfiles');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $imageProfile = $this->ImageProfiles->newEntity();

        if ($this->request->is('post')) 
        {
            $user = $this->Users->findByUsername($userName)->firstOrFail();

            if ($this->ImageProfiles->find('all')->where(['ImageProfiles.users_id =' => $user->id])->first() != null) 
            {
                $imageProfile = $this->ImageProfiles->find('all')->where(['ImageProfiles.users_id =' => $user->id])->firstOrFail();
                $this->deletePhoto($imageProfile);
            }
            $this->UploadImageProfile->upload(
                $this->request->data['image'],
                $this->request->data['galerys_id'],
                $this->request->data['users_id']
            );
        }

        $galerys = $this->ImageProfiles->Galerys->find('list', ['limit' => 200]);
        $user = $this->Users->findByUsername($userName)->firstOrFail();
        $this->set(compact('imageProfile', 'galerys', 'user', 'footers', 'categoryVideos'));
    }

    public function deletePhoto($imageProfile = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galery = $imageProfile->galerys_id;
        $filename = $imageProfile->image;
        $dir = WWW_ROOT . 'img' . DS . 'galerys' . DS . $galery . DS . $filename;

        if ($this->ImageProfiles->delete($imageProfile)) 
        {
            $file = new File($dir);
            $file->delete();
            $file->close();
        }
    }

    public function updatePassword($id = null)
    {
        if ($this->Roles->get($this->Auth->user()['roles_id'])->role == 'common') 
        {
            $this->viewBuilder()->setLayout('adminlte_videos');
            $this->loadModel('CategoryVideos');
            $this->loadModel('Publicitys');
            $this->loadModel('Footers');
            $footers = $this->Footers->find('all')->first();
            $categoryVideos = $this->CategoryVideos->find('all');

            $user = $this->Users->get($id, [
                'contain' => [],
            ]);

            if ($this->request->is(['patch', 'post', 'put'])) 
            {
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) 
                {
                    $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $roles = $this->Users->Roles->find('list', ['limit' => 200]);
            $this->set(compact('user', 'roles', 'footers', 'categoryVideos'));
        } 
        else 
        {
            return $this->redirect(['controller' => 'videos', 'action' => 'index']);
        }
    }
}