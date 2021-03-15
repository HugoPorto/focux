<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Filesystem\Folder;

class ImagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Upload');
    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Galerias']
        ];
        $images = $this->paginate($this->Images);

        $this->set(compact('images'));
    }

    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['Galerias']
        ]);

        $this->set('image', $image);
    }

    public function add()
    {
        $image = $this->Images->newEntity();
        if ($this->request->is('post')) {
            // $image = $this->Images->patchEntity($image, $this->request->getData());
            // if ($this->Images->save($image)) {
            //     $this->Flash->success(__('The image has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The image could not be saved. Please, try again.'));

            $this->Upload->upload($this->request->data['image'], $this->request->data['galerys_id']);
        }
        $galerys = $this->Images->Galerys->find('list', ['limit' => 200]);
        $this->set(compact('image', 'galerys'));
        $this->set('_serialize', ['image']);
    }

    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $galerias = $this->Images->Galerias->find('list', ['limit' => 200]);
        $this->set(compact('image', 'galerias'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
