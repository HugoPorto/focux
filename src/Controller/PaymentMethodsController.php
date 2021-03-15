<?php
namespace App\Controller;
use App\Controller\AppController;

class PaymentMethodsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'MethodTopayments']
        ];
        $paymentMethods = $this->paginate($this->PaymentMethods);

        $this->set(compact('paymentMethods'));
    }

    public function view($id = null, $username)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $paymentMethod = $this->PaymentMethods->get($id, [
            'contain' => ['Users', 'MethodTopayments']
        ]);

        $this->set([
            'paymentMethod' => $paymentMethod,
            'user' => $user,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos
        ]);
    }

    public function add($username)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $paymentMethod = $this->PaymentMethods->newEntity();
        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        if ($this->request->is('post')) {
            $paymentMethod = $this->PaymentMethods->patchEntity($paymentMethod, $this->request->getData());
            if ($this->PaymentMethods->save($paymentMethod)) {
                $this->Flash->success(__('The payment method has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The payment method could not be saved. Please, try again.'));
        }
        $users = $this->PaymentMethods->Users->find('list', ['limit' => 200]);
        $methodTopayments = $this->PaymentMethods->MethodTopayments->find('list', ['limit' => 200]);
        $this->set(compact([
            'paymentMethod', 
            'users', 
            'methodTopayments',
            'user',
            'footers',
            'categoryVideos'
        ]));
    }

    public function edit($id = null, $username)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        $paymentMethod = $this->PaymentMethods->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentMethod = $this->PaymentMethods->patchEntity($paymentMethod, $this->request->getData());
            if ($this->PaymentMethods->save($paymentMethod)) {
                $this->Flash->success(__('The payment method has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The payment method could not be saved. Please, try again.'));
        }
        $users = $this->PaymentMethods->Users->find('list', ['limit' => 200]);
        $methodTopayments = $this->PaymentMethods->MethodTopayments->find('list', ['limit' => 200]);
        $this->set(compact([
            'paymentMethod', 
            'users', 
            'methodTopayments',
            'user',
            'footers',
            'categoryVideos'

        ]));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentMethod = $this->PaymentMethods->get($id);
        if ($this->PaymentMethods->delete($paymentMethod)) {
            $this->Flash->success(__('The payment method has been deleted.'));
        } else {
            $this->Flash->error(__('The payment method could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'viewByUser', $username]);
    }

    public function viewByUser($username = null)
    {     
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');        
        $user = $this->Users->findByUsername($username)->firstOrFail();   

        $this->paginate = [
            'contain' => ['Users']
        ];

        $paymentMethods = $this->paginate($this->PaymentMethods->find('all')->where(['PaymentMethods.users_id =' => $user->id]));

        $this->set([
            'paymentMethods' => $paymentMethods,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos
            ]);
    }

    public function maintenance()
    {
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }
}
