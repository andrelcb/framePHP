<?php 

namespace App\Controllers;

use Frame\Controller\Action;
class IndexController extends Action{

    public function index() {
        $this->dados['arrayObjeto'] = ["sofa", "cadeira", "cama"];
        $this->twig->render('index/index', $this->dados);
    }

    public function sobreNos() {
        $this->view->dados = ["notebook","nos"];
        $this->render('sobreNos');
    }


}