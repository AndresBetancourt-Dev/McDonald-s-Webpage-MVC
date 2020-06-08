<?php

class Listado extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->customers = [];
    }

    function render(){
        $customers =  $this->model->getData();
        $this->view->customers = $customers;
        $this->view->render('listado/index');
    }
}

?>