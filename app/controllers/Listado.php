<?php

class Listado extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->customers = [];
        $this->view->products = [];
    }

    function render(){
        $customers =  $this->model->getData();
        $products = $this->model->getProductData();
        $this->view->customers = $customers;
        $this->view->products = $products;
        $this->view->render('listado/index');
    }
}

?>