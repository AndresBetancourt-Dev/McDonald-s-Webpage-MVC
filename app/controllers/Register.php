<?php

class Register extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message = "";
    }

    function render(){
        $this->view->render('register/index');
    }

    public function insertUser(){
        $user = $_POST['user'];
        $nombre = $_POST['name'];
        $password = $_POST['password'];

       if($this->model->insertNewUser($user,$nombre,$password)){
        $this->view->message = "Registro efectuado exitosamente";
        $login = new Login();
        $login->loadModel('Login');
        $login->view->errorMessage = $this->view->message;
        $login->render();
       }else{
        $this->view->message = "El usuario ya existe en el sistema";
        $this->render();
       }

    }


}

?>