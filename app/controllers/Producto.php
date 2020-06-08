<?php

class Producto extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->errorMessage = "";
    }

    function render(){
        $this->view->render('producto/index');
    }

    function productRegister(){
        $code = $_POST['code'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];

        if($this->model->insert(['codigo' => $code, 'nombre' => $name, 'imagen' => $image, 'precio' => $price, 'cantidad' => $quantity, 'descripcion' => $description])){
            $this->view->errorMessage = "¡Inserción de producto efectuada correctamente!";
            $this->render();
        }else{
            $this->view->errorMessage = "¡Hubo un Error o el Producto ya Existe!";
            $this->render();
        } 
    }
}

?>