<?php
namespace App\Controller;
use App\Controller\AppController;

class WorksController extends AppController
{

    public function index()
    {
        $works = $this->paginate($this->Works);

        $this->set(compact('works'));
    }

    public function view($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => []
        ]);

        $this->set('work', $work);
    }

    public function add()
    {
        $work = $this->Works->newEntity();
        if ($this->request->is('post')) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    public function edit($id = null)
    {
        $work = $this->Works->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $work = $this->Works->patchEntity($work, $this->request->getData());
            if ($this->Works->save($work)) {
                $this->Flash->success(__('The work has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The work could not be saved. Please, try again.'));
        }
        $this->set(compact('work'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $work = $this->Works->get($id);
        if ($this->Works->delete($work)) {
            $this->Flash->success(__('The work has been deleted.'));
        } else {
            $this->Flash->error(__('The work could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}