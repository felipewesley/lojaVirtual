<?php

/**
 * @author Felipe Wesley
 * @link https://github.com/felipewesley/mini-framework-php-mvc
 */

namespace App\Controller;

use MiniFramework\Controller\Action;
// use MiniFramework\Controller\Debug;

class LojaVirtualController extends Action {

    public function index(){

        /**
         * A busca inicial pelas rotas começa aqui
         * Se a rota requisitada não existir no seu projeto, este método será chamado
         */

		$this->view->lojaShortName = 'LojaVirtual';
		$this->view->lojaName = 'Loja virtual de produtos eletrônicos';
		$this->view->icon = './img/icon_default.png';

        return $this->render('index','',['css' => 'loja_virtual_style', 'js' => 'index']);
	}

	public function admLogin(){

		return $this->render('admLogin');
	}

    public function about(){

        $this->view->title = 'About';

        return $this->render('index','',['css' => 'loja_virtual_style', 'js' => 'index']);
    }
}
