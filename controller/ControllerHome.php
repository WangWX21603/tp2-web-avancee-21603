<?php

class ControllerHome{

    public function index(){
       return Twig::render('home-index.php');
    }

    public function error(){
        return Twig::render('error.php');
    }
}