<?php
if(isset($_SESSION['user'])){
    $currentUser = new CurrentUser('Registro');
    $currentUser->render();
}else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Registro</title>
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/register.css">
</head>
<body>
    <?php require_once '../app/views/header.php'; ?>

    <section class="login">
    
    <div class="login__container">
    <h1 class="login__title">Registro</h1>
    <p class="login__error"><?php echo $this->message; ?></p>
    <form  class="login__form"  action="<?php echo constant('URL');?>register/insertUser" method="POST">
    <label for="user">Usuario/E-mail</label>
    <input type="email" name="user" id="user" placeholder="Correo Electrónico" required>
    <label for="user">Nombre</label>
    <input type="text" name="name" id="name" placeholder="Nombre" required>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password" placeholder="Contraseña" required>
    <br>
    <input type="submit" class="login__button">
    </form>

    </div>
    </section>



    <?php require_once '../app/views/footer.php'; ?>
</body>
</html>