<?php 

namespace App\Controllers;

use Frame\Controller\Action;
class IndexController extends Action{

    public function index() {
        $this->view->dados['titulo'] = 'Inicio';
        $this->view->dados['arrayObjeto'] = ["sofa", "cadeira", "cama"];
        $this->render('index', $this->view->dados);
    }

    public function sobreNos() {
        $this->view->dados = ["notebook","nos"];
        $this->render('sobreNos');
    }


}