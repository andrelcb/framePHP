<?php

namespace Frame\Controller;

use Twig;

abstract class Action {

    protected $twig;
    protected $dados = [];
    
    public function __construct() {
        $twig = $this->obterTwig();
    }

    protected function obterTwig () {
        $loader = new Twig_Loader_FileSystem('Views/');

        $twig = new Twig_Environment($loader, [
          "cache" => "Views/cache",
          "cache" => false  
        ]);
  
        return $twig;
    }

}