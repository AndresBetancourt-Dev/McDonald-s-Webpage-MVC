<?php
if(isset($_SESSION['user'])){
    $currentUser = new CurrentUser('Error');
    $currentUser->render();
}else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Error</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/error.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
</head>
<body>
    <?php require_once '../app/views/header.php'; ?>
    <section class="error">
    <div class="error__container">
    <h1 class="error__text">
    ¡Hubo un error, o la página solicitada no existe!
    </h1>
    </div>
    </section>
    <?php require_once '../app/views/footer.php'; ?>
</body>
</html>