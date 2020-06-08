<?php

class Login extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->errorMessage = "";
    }

    function render(){
        $this->view->render('login/index');
    }

    public function loginValidation(){
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        $exists = $this->model->userExists($user,$password);
        if($exists){
        $this->model->setUser($user);
        $_SESSION['user'] = $this->model->getUser();
        $this->view->errorMessage = "";
        $this->render();
        }else{
          $this->view->errorMessage = "Usuario y/o contraseña incorrectos";
          $this->render();
        }
    }
}

?>