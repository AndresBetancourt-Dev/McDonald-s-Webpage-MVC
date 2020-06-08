<?php
if(isset($_SESSION['user'])){
}else{
  die();
}
?>
<?php
require_once '../app/core/UserSession.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - <?php echo $this->title;?></title>
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/user.css">
</head>
<body>
    <section class="user__container">
        <a href="<?php echo constant('URL');?>CurrentUser/finishSession" class="user__logout" >Cerrar Sesión</a>
        </form>
        <p class="user__name">¡Hola, <?php echo $_SESSION['user'];?>!</p>
    </section>
</body>
</html>