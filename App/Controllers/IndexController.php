<?php 

namespace App\Controllers;

use Frame\Controller\Action;
class IndexController extends Action{

    public function index() {
        $this->dados['arrayObjeto'] = ["sofa", "cadeira", "cama"];
        echo $this->twig->render('index/index.twig', $this->dados);
    }

    public function sobreNos() {
        $this->view->dados = ["notebook","nos"];
        $this->render('sobreNos');
    }


}