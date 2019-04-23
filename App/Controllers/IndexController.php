<?php 

namespace App\Controllers;

use Frame\Controller\Action;
class IndexController extends Action{

    public function index() {
        $this->view->dados['titulo'] = 'Inicio';
        $this->view->dados['arrayObjeto'] = ["sofa", "cadeira", "cama"];
        $this->render('index');
    }

    public function sobreNos() {
        $this->view->dados['titulo'] = 'Sobre Nos';
        $this->view->dados['arrayObjeto'] = ["notebook","nos"];
        $this->render('sobreNos');
    }


}