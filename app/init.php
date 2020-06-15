<?php


require_once '../config/config.php';
require_once 'core/Database.php';
require_once 'core/View.php';
require_once 'core/UserSession.php';
require_once 'core/Controller.php';
require_once 'core/Model.php';
require_once 'core/App.php';
require_once 'controllers/CurrentUser.php';
require_once 'core/Customer.php';
require_once 'core/Product.php';

$userSession = new UserSession();
$app = new App();



?>