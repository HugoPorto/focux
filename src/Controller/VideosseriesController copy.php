<?php
namespace App\Controller;
use App\Controller\AppController;

class VideosseriesController extends AppController
{
    public function index()
    {
        $videosseries = $this->Videosseries->find('all',[
            'contain' => ['Series', 'Seanseries']
        ]);

        $this->set(compact('videosseries'));
    }

    public function view($id = null)
    {
        $videosseries = $this->Videosseries->get($id, [
            'contain' => ['Series', 'Seanseries']
        ]);

        $this->set('videosseries', $videosseries);
    }

    public function add($season, $serie )
    {
        $videosseries = $this->Videosseries->newEntity();
        if ($this->request->is('post')) {
            $videosseries = $this->Videosseries->patchEntity($videosseries, $this->request->getData());
            if ($this->Videosseries->save($videosseries)) {
                $this->Flash->success(__('The videosseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The videosseries could not be saved. Please, try again.'));
        }
        $series = $this->Videosseries->Series->find('list', 
            [
                'limit' => 200000,
                'conditions' => [
                    'id =' => $serie
                ]
            ]);
        $seanseries = $this->Videosseries->Seanseries->find('list', 
            [
                'limit' => 200000,
                'conditions' => [
                    'id =' => $season
                ]
            ]);

        $this->set(compact('videosseries', 'series', 'seanseries'));
    }

    public function edit($id = null)
    {
        $videosseries = $this->Videosseries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $videosseries = $this->Videosseries->patchEntity($videosseries, $this->request->getData());
            if ($this->Videosseries->save($videosseries)) {
                $this->Flash->success(__('The videosseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The videosseries could not be saved. Please, try again.'));
        }
        $series = $this->Videosseries->Series->find('list', ['limit' => 200]);
        $seanseries = $this->Videosseries->Seanseries->find('list', ['limit' => 200]);
        $this->set(compact('videosseries', 'series', 'seanseries'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $videosseries = $this->Videosseries->get($id);
        if ($this->Videosseries->delete($videosseries)) {
            $this->Flash->success(__('The videosseries has been deleted.'));
        } else {
            $this->Flash->error(__('The videosseries could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
