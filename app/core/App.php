<?php

require_once '../app/controllers/TheError.php';
require_once '../app/controllers/Home.php';
require_once '../app/controllers/Login.php';

class App{

    public function __construct(){
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url,'/');
        $url = explode('/',$url);

        if(empty($url[0])){
            $controllerArchive = '../app/controllers/Login.php';
            require_once $controllerArchive;
            $controller = new Home();
            $controller->loadModel('Home');
            $controller->render();
            return false;
        }

       $controllerArchive = '../app/controllers/'.$url[0].'.php';
       if(file_exists($controllerArchive)){
        require_once $controllerArchive;
        $controller = new $url[0]('');
        $controller->loadModel($url[0]);
        if(isset($url[1])){
            $controller->{$url[1]}();
        }else{
            $controller->render();
        }
       }else{
            $controller = new TheError();   
       }
    }


}