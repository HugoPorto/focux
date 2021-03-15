<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Genreseries Controller
 *
 * @property \App\Model\Table\GenreseriesTable $Genreseries
 *
 * @method \App\Model\Entity\Genreseries[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenreseriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $genreseries = $this->paginate($this->Genreseries);

        $this->set(compact('genreseries'));
    }

    /**
     * View method
     *
     * @param string|null $id Genreseries id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genreseries = $this->Genreseries->get($id, [
            'contain' => []
        ]);

        $this->set('genreseries', $genreseries);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genreseries = $this->Genreseries->newEntity();
        if ($this->request->is('post')) {
            $genreseries = $this->Genreseries->patchEntity($genreseries, $this->request->getData());
            if ($this->Genreseries->save($genreseries)) {
                $this->Flash->success(__('The genreseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genreseries could not be saved. Please, try again.'));
        }
        $this->set(compact('genreseries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Genreseries id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genreseries = $this->Genreseries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genreseries = $this->Genreseries->patchEntity($genreseries, $this->request->getData());
            if ($this->Genreseries->save($genreseries)) {
                $this->Flash->success(__('The genreseries has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genreseries could not be saved. Please, try again.'));
        }
        $this->set(compact('genreseries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Genreseries id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genreseries = $this->Genreseries->get($id);
        if ($this->Genreseries->delete($genreseries)) {
            $this->Flash->success(__('The genreseries has been deleted.'));
        } else {
            $this->Flash->error(__('The genreseries could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
