<?php
namespace App\Controller;
use App\Controller\AppController;

class SeanseriesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Series']
        ];
        $seanseries = $this->paginate($this->Seanseries);

        $this->set(compact('seanseries'));
    }

    public function view($id = null)
    {
        $seanseries = $this->Seanseries->get($id, [
            'contain' => ['Series']
        ]);

        $this->set('seanseries', $seanseries);
    }

    public function add($serie)
    {
        $seanseries = $this->Seanseries->newEntity();
        if ($this->request->is('post')) {
            $seanseries = $this->Seanseries->patchEntity($seanseries, $this->request->getData());
            if ($this->Seanseries->save($seanseries)) {
                $this->Flash->success(__('The seanseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seanseries could not be saved. Please, try again.'));
        }
        $series = $this->Seanseries->Series->find('list', 
            [
                'limit' => 200000,
                'conditions' => [
                    'id =' => $serie
                ]
            ]
        );
        $this->set(compact('seanseries', 'series'));
    }

    public function edit($id = null)
    {
        $seanseries = $this->Seanseries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seanseries = $this->Seanseries->patchEntity($seanseries, $this->request->getData());
            if ($this->Seanseries->save($seanseries)) {
                $this->Flash->success(__('The seanseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seanseries could not be saved. Please, try again.'));
        }
        $series = $this->Seanseries->Series->find('list', ['limit' => 200]);
        $this->set(compact('seanseries', 'series'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seanseries = $this->Seanseries->get($id);
        if ($this->Seanseries->delete($seanseries)) {
            $this->Flash->success(__('The seanseries has been deleted.'));
        } else {
            $this->Flash->error(__('The seanseries could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
