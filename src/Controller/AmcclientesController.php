<?php
namespace App\Controller;
use App\Controller\AppController;

class AmcclientesController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->Auth->allow(
            [
                'apiindex',
                'apiadd',
                'apilogin',
            ]);
    }
 
    public function index()
    {
        $this->paginate = [
            'contain' => ['AmcVendasEmpresas']
        ];
        $amcclientes = $this->paginate($this->Amcclientes);

        $this->set(compact('amcclientes'));
    }

    public function apiindex()
    {
        $amcclientes = $this->Amcclientes->find('all');

        $this->set([
            'amcclientes' => $amcclientes,
            '_serialize' => ['amcclientes']
        ]);
    }

    public function apiadd()
    {
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        $amcclientes = $this->Amcclientes->newEntity($this->request->getData());

        if ($this->Amcclientes->save($amcclientes)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }

        $this->set([
            'message' => $amcclientes,
            'amcclientes' => $amcclientes ,
            '_serialize' => ['message', 'amcclientes']
        ]);
    }

    public function apilogin(){
        $requestData = $this->Amcclientes->newEntity($this->request->getData());

        $amcclientes = $this->Amcclientes->find('all', [
            'conditions' => [
                'Amcclientes.usuario =' => $requestData->usuario,
                'Amcclientes.senha =' => $requestData->senha,
            ]
        ]);

        $this->set([
            'message' => $amcclientes,
            '_serialize' => ['message']
        ]);
    }

    public function apiedit($id)
    {
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        $camarao = $this->Camaroes->get($id);
        if ($this->request->is(['post', 'put'])) {
            $ca = $this->Camaroes->patchEntity($camarao, $this->request->getData());
            if ($this->Camaroes->save($ca)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $camarao,
            '_serialize' => ['camarao']
        ]);
    }
    
    public function apidelete($id)
    {
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        $camaroes = $this->Camaroes->get($id);
        $message = 'Deleted';
        if (!$this->Camaroes->delete($camaroes)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function view($id = null)
    {
        $amccliente = $this->Amcclientes->get($id, [
            'contain' => ['AmcVendasEmpresas']
        ]);

        $this->set('amccliente', $amccliente);
    }

    public function add()
    {
        $amccliente = $this->Amcclientes->newEntity();
        if ($this->request->is('post')) {
            $amccliente = $this->Amcclientes->patchEntity($amccliente, $this->request->getData());
            if ($this->Amcclientes->save($amccliente)) {
                $this->Flash->success(__('The amccliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amccliente could not be saved. Please, try again.'));
        }
        $amcVendasEmpresas = $this->Amcclientes->AmcVendasEmpresas->find('list', ['limit' => 200]);
        $this->set(compact('amccliente', 'amcVendasEmpresas'));
    }

    public function edit($id = null)
    {
        $amccliente = $this->Amcclientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amccliente = $this->Amcclientes->patchEntity($amccliente, $this->request->getData());
            if ($this->Amcclientes->save($amccliente)) {
                $this->Flash->success(__('The amccliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amccliente could not be saved. Please, try again.'));
        }
        $amcVendasEmpresas = $this->Amcclientes->AmcVendasEmpresas->find('list', ['limit' => 200]);
        $this->set(compact('amccliente', 'amcVendasEmpresas'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amccliente = $this->Amcclientes->get($id);
        if ($this->Amcclientes->delete($amccliente)) {
            $this->Flash->success(__('The amccliente has been deleted.'));
        } else {
            $this->Flash->error(__('The amccliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
