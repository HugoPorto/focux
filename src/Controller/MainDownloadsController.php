<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MainDownloads Controller
 *
 * @property \App\Model\Table\MainDownloadsTable $MainDownloads
 *
 * @method \App\Model\Entity\MainDownload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MainDownloadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mainDownloads = $this->paginate($this->MainDownloads);

        $this->set(compact('mainDownloads'));
    }

    /**
     * View method
     *
     * @param string|null $id Main Download id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mainDownload = $this->MainDownloads->get($id, [
            'contain' => []
        ]);

        $this->set('mainDownload', $mainDownload);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mainDownload = $this->MainDownloads->newEntity();
        if ($this->request->is('post')) {
            $mainDownload = $this->MainDownloads->patchEntity($mainDownload, $this->request->getData());
            if ($this->MainDownloads->save($mainDownload)) {
                $this->Flash->success(__('The main download has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main download could not be saved. Please, try again.'));
        }
        $this->set(compact('mainDownload'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Main Download id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mainDownload = $this->MainDownloads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainDownload = $this->MainDownloads->patchEntity($mainDownload, $this->request->getData());
            if ($this->MainDownloads->save($mainDownload)) {
                $this->Flash->success(__('The main download has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main download could not be saved. Please, try again.'));
        }
        $this->set(compact('mainDownload'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Main Download id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainDownload = $this->MainDownloads->get($id);
        if ($this->MainDownloads->delete($mainDownload)) {
            $this->Flash->success(__('The main download has been deleted.'));
        } else {
            $this->Flash->error(__('The main download could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
