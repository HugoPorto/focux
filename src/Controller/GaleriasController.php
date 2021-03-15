<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Filesystem\Folder;

class GaleriasController extends AppController
{
    public function index()
    {
        $galerias = $this->paginate($this->Galerias);

        $this->set(compact('galerias'));
    }

    public function view($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => []
        ]);

        $this->set('galeria', $galeria);
    }

    public function add()
    {
        $galeria = $this->Galerias->newEntity();
        if ($this->request->is('post')) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->getData());
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));

                $reg = $this->Galerias->findByTitle($galeria->title)->toArray();
                // $this->log($reg, LOG_DEBUG);

                $caminho = WWW_ROOT.DS.'img'.DS.'galerias'.DS.$reg[0]['title'];
                $dir = new Folder();

                if($dir->create($caminho, true, 0755)){
                    $this->Flash->success('A galeria foi criada com sucesso...');
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
        }
        $this->set(compact('galeria'));
    }

    public function edit($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->getData());
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
        }
        $this->set(compact('galeria'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeria = $this->Galerias->get($id);

        $caminho = WWW_ROOT.DS.'img'.DS.'galerias'.DS.$galeria->title;
        
        if ($this->Galerias->delete($galeria)) {
            $this->Flash->success(__('The galeria has been deleted.'));

            if(is_dir($caminho))
            {
                $dir = new Folder($caminho);
                if($dir->delete())
                {
                    $this->Flash->success('Pasta' . $galeria->title . 'excluída com sucesso!');
                }
                else
                {
                    $this->Flash->error('Não foi possível excluir a pasta' . $galeria->title . '!');
                }
            }

        } else {
            $this->Flash->error(__('The galeria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}