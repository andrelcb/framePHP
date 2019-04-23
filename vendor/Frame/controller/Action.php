<?php

namespace Frame\Controller;

use Twig;

abstract class Action {

    protected $twig;
    protected $view;
    
    public function __construct() {
        $this->view = new \stdClass();
        $this->twig = $this->obterTwig();
    }

    public function render($view, $dados) {
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        $this->view->dados["body"] = $classAtual.'/'.$view.'.twig';
        $this->view->dados["dados"] = $dados;

        // echo '<pre>';
        // var_dump($this->view->dados);
        // echo '</pre>';
        echo $this->twig->render('layout1.twig', $this->view->dados);
    }

    protected function obterTwig () {
        $loader = new \Twig\Loader\FilesystemLoader('../App/Views');

        $twig = new \Twig\Environment($loader, [
          "cache" => "../App/Views/cache",
          "cache" => false  
        ]);
  
        return $twig;
    }

}