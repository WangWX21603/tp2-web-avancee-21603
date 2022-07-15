<?php

class RequirePage{
    static function requireModel($page){
        return require_once 'model/Model'.$page.'.php';
    }

    static function redirect($url){
        header("location: https://e2194804.webdev.cmaisonneuve.qc.ca/tp2-web-avancee-21603/$url");
        //header("location: http://localhost:7080/webAvancee21603/tp2-web-avancee-21603/$url");
    }
    
    static function requireLibrary($page){
        return require_once 'library/'.$page.'.php';
    }

}