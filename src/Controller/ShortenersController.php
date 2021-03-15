<?php
namespace App\Controller;
use App\Controller\AppController;

class ShortenersController extends AppController
{
    public function index()
    {
        $shorteners = $this->paginate($this->Shorteners);
        $this->set(compact('shorteners'));
    }
    public function view($id = null)
    {
        $shortener = $this->Shorteners->get($id, [
            'contain' => []
        ]);

        $this->set('shortener', $shortener);
    }
    public function add()
    {
        $shortener = $this->Shorteners->newEntity();

        if ($this->request->is('post')) 
        {
            $shortener = $this->Shorteners->patchEntity($shortener, $this->request->getData());
            if ($this->Shorteners->save($shortener)) 
            {
                $this->Flash->success2(__('The shortener has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The shortener could not be saved. Please, try again.'));
        }
        $this->set(compact('shortener'));
    }
    public function edit($id = null)
    {
        $shortener = $this->Shorteners->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $shortener = $this->Shorteners->patchEntity($shortener, $this->request->getData());

            if ($this->Shorteners->save($shortener)) 
            {
                $this->Flash->success2(__('The shortener has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The shortener could not be saved. Please, try again.'));
        }
        $this->set(compact('shortener'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shortener = $this->Shorteners->get($id);

        if ($this->Shorteners->delete($shortener)) 
        {
            $this->Flash->success2(__('The shortener has been deleted.'));
        } 
        else 
        {
            $this->Flash->error2(__('The shortener could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
