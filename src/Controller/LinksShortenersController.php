<?php
namespace App\Controller;
use App\Controller\AppController;

class LinksShortenersController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shorteners', 'Videos']
        ];
        $linksShorteners = $this->paginate($this->LinksShorteners);

        $this->set(compact('linksShorteners'));
    }
    public function view($id = null)
    {
        $linksShortener = $this->LinksShorteners->get($id, [
            'contain' => ['Shorteners', 'Videos']
        ]);

        $this->set('linksShortener', $linksShortener);
    }
    public function add()
    {
        $linksShortener = $this->LinksShorteners->newEntity();
        if ($this->request->is('post')) 
        {
            $linksShortener = $this->LinksShorteners->patchEntity($linksShortener, $this->request->getData());
            if ($this->LinksShorteners->save($linksShortener)) 
            {
                $this->Flash->success2(__('The links shortener has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The links shortener could not be saved. Please, try again.'));
        }
        $shorteners = $this->LinksShorteners->Shorteners->find('list', ['limit' => 200]);
        $videos = $this->LinksShorteners->Videos->find('list', ['limit' => 200]);
        $this->set(compact('linksShortener', 'shorteners', 'videos'));
    }
    public function edit($id = null)
    {
        $linksShortener = $this->LinksShorteners->get($id, 
        [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            $linksShortener = $this->LinksShorteners->patchEntity($linksShortener, $this->request->getData());

            if ($this->LinksShorteners->save($linksShortener)) 
            {
                $this->Flash->success2(__('The links shortener has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The links shortener could not be saved. Please, try again.'));
        }        
        $shorteners = $this->LinksShorteners->Shorteners->find('list', 
        [
            'limit' => 200
        ]);
        $videos = $this->LinksShorteners->Videos->find('list', 
        [
            'limit' => 200
        ]);
        $this->set(compact('linksShortener', 'shorteners', 'videos'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linksShortener = $this->LinksShorteners->get($id);

        if ($this->LinksShorteners->delete($linksShortener)) 
        {
            $this->Flash->success2(__('The links shortener has been deleted.'));
        } 
        else 
        {
            $this->Flash->error2(__('The links shortener could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
