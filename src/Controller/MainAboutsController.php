<?php
namespace App\Controller;
use App\Controller\AppController;

class MainAboutsController extends AppController
{
    public function index()
    {
        $mainAbouts = $this->paginate($this->MainAbouts);

        $this->set(compact('mainAbouts'));
    }

    public function view($id = null)
    {
        $mainAbout = $this->MainAbouts->get($id, [
            'contain' => []
        ]);

        $this->set('mainAbout', $mainAbout);
    }

    public function add()
    {
        $mainAbout = $this->MainAbouts->newEntity();
        if ($this->request->is('post')) {
            $mainAbout = $this->MainAbouts->patchEntity($mainAbout, $this->request->getData());
            if ($this->MainAbouts->save($mainAbout)) {
                $this->Flash->success2(__('The main about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The main about could not be saved. Please, try again.'));
        }
        $this->set(compact('mainAbout'));
    }

    public function edit($id = null)
    {
        $mainAbout = $this->MainAbouts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainAbout = $this->MainAbouts->patchEntity($mainAbout, $this->request->getData());
            if ($this->MainAbouts->save($mainAbout)) {
                $this->Flash->success2(__('The main about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The main about could not be saved. Please, try again.'));
        }
        $this->set(compact('mainAbout'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainAbout = $this->MainAbouts->get($id);
        if ($this->MainAbouts->delete($mainAbout)) {
            $this->Flash->success2(__('The main about has been deleted.'));
        } else {
            $this->Flash->error2(__('The main about could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
