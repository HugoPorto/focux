<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grupotributacoes Controller
 *
 * @property \App\Model\Table\GrupotributacoesTable $Grupotributacoes
 *
 * @method \App\Model\Entity\Grupotributaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GrupotributacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Csts', 'Cfops']
        ];
        $grupotributacoes = $this->paginate($this->Grupotributacoes);

        $this->set(compact('grupotributacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Grupotributaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grupotributaco = $this->Grupotributacoes->get($id, [
            'contain' => ['Csts', 'Cfops']
        ]);

        $this->set('grupotributaco', $grupotributaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grupotributaco = $this->Grupotributacoes->newEntity();
        if ($this->request->is('post')) {
            $grupotributaco = $this->Grupotributacoes->patchEntity($grupotributaco, $this->request->getData());
            if ($this->Grupotributacoes->save($grupotributaco)) {
                $this->Flash->success(__('The grupotributaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupotributaco could not be saved. Please, try again.'));
        }
        $csts = $this->Grupotributacoes->Csts->find('list', ['limit' => 200]);
        $cfops = $this->Grupotributacoes->Cfops->find('list', ['limit' => 200]);
        $this->set(compact('grupotributaco', 'csts', 'cfops'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupotributaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grupotributaco = $this->Grupotributacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grupotributaco = $this->Grupotributacoes->patchEntity($grupotributaco, $this->request->getData());
            if ($this->Grupotributacoes->save($grupotributaco)) {
                $this->Flash->success(__('The grupotributaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grupotributaco could not be saved. Please, try again.'));
        }
        $csts = $this->Grupotributacoes->Csts->find('list', ['limit' => 200]);
        $cfops = $this->Grupotributacoes->Cfops->find('list', ['limit' => 200]);
        $this->set(compact('grupotributaco', 'csts', 'cfops'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupotributaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grupotributaco = $this->Grupotributacoes->get($id);
        if ($this->Grupotributacoes->delete($grupotributaco)) {
            $this->Flash->success(__('The grupotributaco has been deleted.'));
        } else {
            $this->Flash->error(__('The grupotributaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
