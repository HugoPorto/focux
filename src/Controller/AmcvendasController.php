<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Amcvendas Controller
 *
 * @property \App\Model\Table\AmcvendasTable $Amcvendas
 *
 * @method \App\Model\Entity\Amcvenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmcvendasController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(
            [
                'api',
                'addOr',
            ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AmcVendasEmpresas']
        ];
        $amcvendas = $this->paginate($this->Amcvendas);

        $this->set(compact('amcvendas'));
    }

    public function api()
    {
        $amcvendas = $this->Amcvendas->find('all');

        $this->set([
            'amcvendas' => $amcvendas,
            '_serialize' => ['amcvendas']
        ]);
    }

    public function addOr()
    {
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        $amcvendas = $this->Amcvendas->newEntity($this->request->getData());

        if ($this->Amcvendas->save($amcvendas)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        
        $amcvendasJSON = json_encode($amcvendas);

        $this->set([
            'message' => $amcvendas,
            'amcvendas' => $amcvendasJSON ,
            '_serialize' => ['message', 'amcvendas']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Amcvenda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amcvenda = $this->Amcvendas->get($id, [
            'contain' => ['AmcVendasEmpresas']
        ]);

        $this->set('amcvenda', $amcvenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amcvenda = $this->Amcvendas->newEntity();
        if ($this->request->is('post')) {
            $amcvenda = $this->Amcvendas->patchEntity($amcvenda, $this->request->getData());
            if ($this->Amcvendas->save($amcvenda)) {
                $this->Flash->success(__('The amcvenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amcvenda could not be saved. Please, try again.'));
        }
        $amcVendasEmpresas = $this->Amcvendas->AmcVendasEmpresas->find('list', ['limit' => 200]);
        $this->set(compact('amcvenda', 'amcVendasEmpresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Amcvenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amcvenda = $this->Amcvendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amcvenda = $this->Amcvendas->patchEntity($amcvenda, $this->request->getData());
            if ($this->Amcvendas->save($amcvenda)) {
                $this->Flash->success(__('The amcvenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amcvenda could not be saved. Please, try again.'));
        }
        $amcVendasEmpresas = $this->Amcvendas->AmcVendasEmpresas->find('list', ['limit' => 200]);
        $this->set(compact('amcvenda', 'amcVendasEmpresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Amcvenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amcvenda = $this->Amcvendas->get($id);
        if ($this->Amcvendas->delete($amcvenda)) {
            $this->Flash->success(__('The amcvenda has been deleted.'));
        } else {
            $this->Flash->error(__('The amcvenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
