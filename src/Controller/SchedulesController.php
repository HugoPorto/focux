<?php
namespace App\Controller;
use App\Controller\AppController;

class SchedulesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['noSchedules']);
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $schedules = $this->paginate($this->Schedules);

        $this->set(compact('schedules'));
    }

    public function view($id = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');  

        $schedule = $this->Schedules->get($id, [
            'contain' => ['Users']
        ]);

        $this->set([
            'schedule' => $schedule,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos
        ]);
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
        $schedules = $this->paginate($this->Schedules->find('all')->where(['Schedules.users_id =' => $user->id]));

        $this->set([
            'schedules' => $schedules,
            'footers' => $footers,
            'categoryVideos' => $categoryVideos
            ]);
    }

    public function noSchedules()
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');

        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $this->set(compact('categoryVideos', 'footers'));

    }

    public function add($username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');

        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');

        $schedule = $this->Schedules->newEntity();

        if ($this->request->is('post')) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'viewByUser', $username]);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $users = $this->Schedules->Users->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'users', 'footers', 'categoryVideos', 'user'));
    }

    public function edit($id = null, $username = null)
    {
        $this->maintenance();
        $this->viewBuilder()->setLayout('adminlte_videos');
        $this->loadModel('CategoryVideos');
        $this->loadModel('Footers');
        $this->loadModel('Users');

        $user = $this->Users->findByUsername($username)->firstOrFail();  
        $footers = $this->Footers->find('all')->first();
        $categoryVideos = $this->CategoryVideos->find('all');
        
        $schedule = $this->Schedules->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'view', $schedule->id]);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $users = $this->Schedules->Users->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'users', 'footers', 'categoryVideos', 'user'));
    }

    public function delete($id = null, $username = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $schedule = $this->Schedules->get($id);
        if ($this->Schedules->delete($schedule)) {
            $this->Flash->success(__('The schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'viewByUser', $username]);
    }

    public function maintenance(){
        $this->loadModel('Maintenances');
        $maintenances = $this->Maintenances->find('all')->first();
        if($maintenances->status == 1){
            $this->redirect(['controller' => 'maintenances', 'action' => 'maintenance']);
        }
    }
}
