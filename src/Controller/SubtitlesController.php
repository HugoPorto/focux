<?php
namespace App\Controller;
use App\Controller\AppController;

class SubtitlesController extends AppController
{
    public function index()
    {
        $subtitles = $this->paginate($this->Subtitles);
        $this->set(compact('subtitles'));
    }
    public function view($id = null)
    {
        $subtitle = $this->Subtitles->get($id, [
            'contain' => []
        ]);
        $this->set('subtitle', $subtitle);
    }
    public function add()
    {
        $subtitle = $this->Subtitles->newEntity();

        if ($this->request->is('post')) 
        {
            $subtitle = $this->Subtitles->patchEntity($subtitle, $this->request->getData());

            if ($this->Subtitles->save($subtitle)) 
            {
                $this->Flash->success2(__('The subtitle has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The subtitle could not be saved. Please, try again.'));
        }
        $this->set(compact('subtitle'));
    }
    public function edit($id = null)
    {
        $subtitle = $this->Subtitles->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $subtitle = $this->Subtitles->patchEntity($subtitle, $this->request->getData());

            if ($this->Subtitles->save($subtitle)) 
            {
                $this->Flash->success2(__('The subtitle has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The subtitle could not be saved. Please, try again.'));
        }
        $this->set(compact('subtitle'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtitle = $this->Subtitles->get($id);

        if ($this->Subtitles->delete($subtitle)) 
        {
            $this->Flash->success2(__('The subtitle has been deleted.'));
        } 
        else
        {
            $this->Flash->error2(__('The subtitle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
