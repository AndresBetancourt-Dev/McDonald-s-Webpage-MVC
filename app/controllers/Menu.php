<?php

class Menu extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('menu/index');
    }
}

?>