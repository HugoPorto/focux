<?php
namespace App\Controller;
use App\Controller\AppController;

class MenusController extends AppController
{
    public function index()
    {
        $menus = $this->paginate($this->Menus);

        $this->set(compact('menus'));
    }

    public function view($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => []
        ]);

        $this->set('menu', $menu);
    }

    public function add()
    {
        $menu = $this->Menus->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success2(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    public function edit($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success2(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error2(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        if ($this->Menus->delete($menu)) {
            $this->Flash->success2(__('The menu has been deleted.'));
        } else {
            $this->Flash->error2(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
