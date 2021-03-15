<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitations Controller
 *
 * @property \App\Model\Table\SolicitationsTable $Solicitations
 *
 * @method \App\Model\Entity\Solicitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $solicitations = $this->paginate($this->Solicitations);

        $this->set(compact('solicitations'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitation = $this->Solicitations->get($id, [
            'contain' => []
        ]);

        $this->set('solicitation', $solicitation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitation = $this->Solicitations->newEntity();
        if ($this->request->is('post')) {
            $solicitation = $this->Solicitations->patchEntity($solicitation, $this->request->getData());
            if ($this->Solicitations->save($solicitation)) {
                $this->Flash->success(__('The solicitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitation could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitation = $this->Solicitations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitation = $this->Solicitations->patchEntity($solicitation, $this->request->getData());
            if ($this->Solicitations->save($solicitation)) {
                $this->Flash->success(__('The solicitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitation could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitation = $this->Solicitations->get($id);
        if ($this->Solicitations->delete($solicitation)) {
            $this->Flash->success(__('The solicitation has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
