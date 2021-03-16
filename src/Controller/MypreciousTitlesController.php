<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MypreciousTitles Controller
 *
 * @property \App\Model\Table\MypreciousTitlesTable $MypreciousTitles
 *
 * @method \App\Model\Entity\MypreciousTitle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MypreciousTitlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mypreciousTitles = $this->paginate($this->MypreciousTitles);

        $this->set(compact('mypreciousTitles'));
    }

    /**
     * View method
     *
     * @param string|null $id Myprecious Title id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mypreciousTitle = $this->MypreciousTitles->get($id, [
            'contain' => []
        ]);

        $this->set('mypreciousTitle', $mypreciousTitle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mypreciousTitle = $this->MypreciousTitles->newEntity();
        if ($this->request->is('post')) {
            $mypreciousTitle = $this->MypreciousTitles->patchEntity($mypreciousTitle, $this->request->getData());
            if ($this->MypreciousTitles->save($mypreciousTitle)) {
                $this->Flash->success(__('The myprecious title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myprecious title could not be saved. Please, try again.'));
        }
        $this->set(compact('mypreciousTitle'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myprecious Title id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mypreciousTitle = $this->MypreciousTitles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mypreciousTitle = $this->MypreciousTitles->patchEntity($mypreciousTitle, $this->request->getData());
            if ($this->MypreciousTitles->save($mypreciousTitle)) {
                $this->Flash->success(__('The myprecious title has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myprecious title could not be saved. Please, try again.'));
        }
        $this->set(compact('mypreciousTitle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Myprecious Title id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mypreciousTitle = $this->MypreciousTitles->get($id);
        if ($this->MypreciousTitles->delete($mypreciousTitle)) {
            $this->Flash->success(__('The myprecious title has been deleted.'));
        } else {
            $this->Flash->error(__('The myprecious title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
