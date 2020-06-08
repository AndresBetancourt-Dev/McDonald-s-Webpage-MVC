<?php

class Cliente extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->errorMessage = "";
    }

    function render(){
        $this->view->render('cliente/index');
    }

    function clientRegister(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        if($this->model->insert(['id' => $id, 'nombre' => $name, 'email' => $email, 'telefono' => $phone])){
            $this->view->errorMessage = "¡Cliente añadido satisfactoriamente!";
            $this->render();
        }else{
            $this->view->errorMessage = "¡Hubo un error o el Cliente ya existe!";
            $this->render();
        }
       
       
    }
}

?>