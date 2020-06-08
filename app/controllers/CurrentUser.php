<?php

class CurrentUser extends Controller{

    function __construct($title){
        parent::__construct();
        $this->view->title = $title;
    }

    function render(){
        $this->view->render('currentUser');
    }

    public function finishSession(){
        session_unset();
        session_destroy();
        $this->login = new Login();
        $this->login->render();
    }

}

?>