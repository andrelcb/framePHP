<?php 

namespace App\Controllers;

use Frame\Controller\Action;
use App\Connection;
use App\Models\Produto;
class IndexController extends Action{

    public function index() {
        $this->view->dados['titulo'] = 'Inicio';
        //criar instacia do pdo
        $conn = Connection::getDb();
        //instaciar o model
        $produto = new Produto($conn);
        $produtos = $produto->getProdutos();
        $this->view->dados['arrayObjeto'] = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos() {
        $this->view->dados['titulo'] = 'Sobre Nos';
        $this->view->dados['arrayObjeto'] = ["notebook","nos"];
        $this->render('sobreNos', 'layout2');
    }


}