<?php

class Twig{
  static public function render($template, $data = array()){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
    $twig->addGlobal('path', 'https://e2194804.webdev.cmaisonneuve.qc.ca/tp2-web-avancee-21603/');
    //$twig->addGlobal('path', 'http://localhost:7080/webAvancee21603/tp2-web-avancee-21603/');
    echo $twig->render($template, $data);
  }
}