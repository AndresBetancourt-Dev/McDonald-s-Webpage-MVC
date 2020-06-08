<?php
if(isset($_SESSION['user'])){
  $currentUser = new CurrentUser('Cliente');
  $currentUser->render();
}else{
  $login = new Login();
  $login->loadModel('Login');
  $login->render();
  die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Cliente</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/customer.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
</head>
<body>
<?php require_once '../app/views/header.php'; ?>
        <section class="customerForm">
                <span class="customerFormTitle">Cliente</span>
                 <div class="customerFormContainer">
                 <p class="customer__error"><?php echo $this->errorMessage; ?></p>
                        <form id="customerForm" action="<?php echo constant('URL');?>cliente/clientRegister" method="POST">
                            <label for="id">Identificación</label>
                            <input type="text" id="id" name="id" placeholder="Su identificación aquí" required>
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Su nombre aquí..." required>
                            <label for="e-mail">E-mail</label>
                            <input type="email" id="e-mail" name="email" placeholder="Su e-mail aquí..." required>
                            <label for="phone">Teléfono</label>
                            <input type="text" name="phone" placeholder="Su teléfono aquí...">
                                <button class="button__form">
                                  Enviar
                                </button>
                        </form>
                 </div>
            </section>
<?php require_once '../app/views/footer.php';?>
</body>
</html>