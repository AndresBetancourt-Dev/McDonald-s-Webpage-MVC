<?php
if(isset($_SESSION['user'])){
    $currentUser = new CurrentUser('Login');
    $currentUser->render();
}else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Login</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/login.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">

</head>
<body>
    <?php require_once '../app/views/header.php'; ?>

    <section class="login">
    
    <div class="login__container">
    <h1 class="login__title">Login</h1>
    <p class="login__error"><?php echo $this->errorMessage; ?></p>
    <form  class="login__form"  action="<?php echo constant('URL');?>login/loginValidation" method="POST">
    <label for="user">Usuario</label>
    <input type="text" name="user" id="user" placeholder="Nombre de Usuario" required>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" placeholder="Contraseña" required>
    <br>
    <input type="submit" class="login__button">
    </form>
    <p class="login__register">
    ¿No tienes una cuenta? <br> <a href="<?php echo constant('URL'); ?>register">Registrate aquí</a>
    </p>
    </div>
    </section>



    <?php require_once '../app/views/footer.php'; ?>
</body>
</html>