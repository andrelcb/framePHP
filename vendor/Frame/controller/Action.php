<?php

namespace Frame\Controller;

use Twig;

abstract class Action {

    protected $twig;
    protected $dados = [];
    
    public function __construct() {
        $this->twig = $this->obterTwig();
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