<?php
namespace App\Controller;
use App\Controller\AppController;

class VideoUserRegistersController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Videos']
        ];

        $videoUserRegisters = $this->paginate($this->VideoUserRegisters);
        $this->set(compact('videoUserRegisters'));
    }
    public function view($id = null)
    {
        $videoUserRegister = $this->VideoUserRegisters->get($id, [
            'contain' => ['Users', 'Videos']
        ]);
        $this->set('videoUserRegister', $videoUserRegister);
    }
    public function add()
    {
        $videoUserRegister = $this->VideoUserRegisters->newEntity();
        if ($this->request->is('post')) 
        {
            $videoUserRegister = $this->VideoUserRegisters->patchEntity($videoUserRegister, $this->request->getData());

            if ($this->VideoUserRegisters->save($videoUserRegister)) 
            {
                $this->Flash->success2(__('The video user register has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The video user register could not be saved. Please, try again.'));
        }
        $users = $this->VideoUserRegisters->Users->find('list', ['limit' => 200]);
        $videos = $this->VideoUserRegisters->Videos->find('list', ['limit' => 200]);
        $this->set(compact('videoUserRegister', 'users', 'videos'));
    }
    public function edit($id = null)
    {
        $videoUserRegister = $this->VideoUserRegisters->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $videoUserRegister = $this->VideoUserRegisters->patchEntity($videoUserRegister, $this->request->getData());
            if ($this->VideoUserRegisters->save($videoUserRegister)) 
            {
                $this->Flash->success2(__('The video user register has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The video user register could not be saved. Please, try again.'));
        }

        $users = $this->VideoUserRegisters->Users->find('list', ['limit' => 200]);
        $videos = $this->VideoUserRegisters->Videos->find('list', ['limit' => 200]);
        $this->set(compact('videoUserRegister', 'users', 'videos'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videoUserRegister = $this->VideoUserRegisters->get($id);

        if ($this->VideoUserRegisters->delete($videoUserRegister)) 
        {
            $this->Flash->success2(__('The video user register has been deleted.'));
        } 
        else 
        {
            $this->Flash->error2(__('The video user register could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
