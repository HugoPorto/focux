<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
        $this->Auth->allow(['about']);
        $this->Auth->allow(['servicos']);
        $this->Auth->allow(['portfolios']);
        $this->Auth->allow(['contatos']);
        $this->Auth->allow(['index2']);
        $this->Auth->allow(['index3']);
        $this->Auth->allow(['index4']);
        $this->Auth->allow(['galery']);
        $this->Auth->allow(['myprodutos']);
        $this->Auth->allow(['malharia']);
        $this->Auth->allow(['grafica']);
        $this->Auth->allow(['papelaria']);
        $this->Auth->allow(['brindes']);
        $this->Auth->allow(['negociate']);
    }

    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function about()
    {
        $this->loadModel('Menus');
        $this->loadModel('Footers');
        $this->loadModel('Abouts');
        $this->loadModel('Midias');
        $this->loadModel('Phones');

        $footers = $this->Footers->find('all')->first();
        $menus = $this->Menus->find('all');
        $abouts = $this->Abouts->find('all');
        $midias = $this->Midias->find('all');  

        $this->log($this->Midias->find('all'), LOG_DEBUG);

        $phones = $this->Phones->find('all')->first();

        $this->set(compact(
            [
                'menus',
                'footers', 
                'abouts',                
                'phones',
                'midias'
            ]
        ));        
    }

    public function servicos(){
        {
            $this->loadModel('Menus');
            $this->loadModel('Footers');
            $this->loadModel('Services');
            $this->loadModel('Midias');
            $this->loadModel('Phones');

            $footers = $this->Footers->find('all')->first();
            $menus = $this->Menus->find('all');
            $services = $this->Services->find('all');
            $midias = $this->Midias->find('all');
            $phones = $this->Phones->find('all')->first();

            $this->set(compact(
                [
                    'menus',
                    'footers', 
                    'services',
                    'midias',
                    'phones' 
                ]
            ));
        }
    }

    public function portfolios(){
        {
            $this->loadModel('Menus');
            $this->loadModel('Footers');
            $this->loadModel('Works');
            $this->loadModel('Midias');
            $this->loadModel('Phones');

            $footers = $this->Footers->find('all')->first();
            $menus = $this->Menus->find('all');
            $works = $this->Works->find('all');
            $midias = $this->Midias->find('all');
            $phones = $this->Phones->find('all')->first();

            $this->set(compact(
                [
                    'menus',
                    'footers', 
                    'works',
                    'midias',
                    'phones'
                ]
            ));
        }
    }

    public function contatos(){
        {
            $this->loadModel('Menus');
            $this->loadModel('Footers');
            $this->loadModel('Midias');
            $this->loadModel('Phones');
            $this->loadModel('Localetitles');
            $this->loadModel('Localereferences');

            $footers = $this->Footers->find('all')->first();
            $menus = $this->Menus->find('all');
            $midias = $this->Midias->find('all');
            $phones = $this->Phones->find('all')->first();
            $localetitles = $this->Localetitles->find('all')->first();
            $localereferences = $this->Localereferences->find('all');

            $this->set(compact(
                [
                    'menus',
                    'footers',
                    'midias',
                    'phones',
                    'localetitles',
                    'localereferences',
                ]
            ));

            $this->log($localereferences, LOG_DEBUG);
        }
    }

    public function galery(){

    }

    public function index(){
        $this->loadModel('Abouts');
        $this->loadModel('Bannerabouts');
        $this->loadModel('Menus');
        $this->loadModel('Logos');
        $this->loadModel('Services');
        $this->loadModel('Resources');
        $this->loadModel('Partners');
        $this->loadModel('Footers');
        $this->loadModel('Empresas');
        $this->loadModel('Midias');
        $this->loadModel('Incorporacoes');
        $this->loadModel('Secondslides');
        $this->loadModel('Skills');
        $this->loadModel('Downloads');
        $this->loadModel('Works');
        
        $abouts = $this->Abouts->find('all');
        $bannerabouts = $this->Bannerabouts->find('all');
        $logos = $this->Logos->find('all');
        $services = $this->Services->find('all');
        $resources = $this->Resources->find('all');
        $partners = $this->Partners->find('all'); 
        $footers = $this->Footers->find('all')->first();
        $empresas = $this->Empresas->find('all'); 
        $midias = $this->Midias->find('all'); 
        $incorporacoes = $this->Incorporacoes->find('all'); 
        $secondslides = $this->Secondslides->find('all'); 
        $menus = $this->Menus->find('all'); 
        $skills = $this->Skills->find('all'); 
        $downloads = $this->Downloads->find('all'); 
        $works = $this->Works->find('all'); 

        $this->set(compact(
            [
                'abouts',
                'logos',
                'services',
                'resources',
                'partners',
                'footers',
                'empresas',
                'midias',
                'incorporacoes',
                'secondslides',
                'menus',
                'bannerabouts',
                'skills',
                'downloads',
                'works',
            ]
        ));
    }

     public function myprodutos(){
        $this->loadModel('Produtos');  
        $this->loadModel('Footers');     
               
        $produtos = $this->Produtos->find('all');
        $footers = $this->Footers->find('all')->first();

        $this->set(compact(
            [
                'produtos',
                'footers'
            ]
        ));
    }

    public function malharia(){
        $this->loadModel('Footers');     
        $this->loadModel('Produtos');  
      
        $footers = $this->Footers->find('all')->first();
        $malharias = $this->Produtos->find('all', 
            [
                'conditions' => ['categoriasprodutos_id =' => '1'],
            ]);

        $this->set(compact(
            [               
                'footers',
                'malharias'
            ]
        ));

        $this->log($malharias, LOG_DEBUG);
    }

    public function grafica(){
        $this->loadModel('Footers');     
        $this->loadModel('Produtos');  
      
        $footers = $this->Footers->find('all')->first();
        $graficas = $this->Produtos->find('all', 
            [
                'conditions' => ['categoriasprodutos_id =' => '2'],
            ]);

        $this->set(compact(
            [               
                'footers',
                'graficas'
            ]
        ));

        $this->log($graficas, LOG_DEBUG);
    }

    public function papelaria(){
        $this->loadModel('Footers');     
        $this->loadModel('Produtos');  
      
        $footers = $this->Footers->find('all')->first();
        $papelarias = $this->Produtos->find('all', 
            [
                'conditions' => ['categoriasprodutos_id =' => '3'],
            ]);

        $this->set(compact(
            [               
                'footers',
                'papelarias'
            ]
        ));

        $this->log($papelarias, LOG_DEBUG);
    }

    public function brindes(){
        $this->loadModel('Footers');     
        $this->loadModel('Produtos');  
      
        $footers = $this->Footers->find('all')->first();
        $brindes = $this->Produtos->find('all', 
            [
                'conditions' => ['categoriasprodutos_id =' => '4'],
            ]);

        $this->set(compact(
            [               
                'footers',
                'brindes'
            ]
        ));
    }

    public function negociate(){

    }
}
