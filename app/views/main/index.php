<?php
if(isset($_SESSION['user'])){
  $currentUser = new CurrentUser('Home');
  $currentUser->render();
}else{
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Home</title>
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>vendor/glider/glider.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/glider.css">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/home.css">
</head>
<body>
<?php require_once '../app/views/header.php'; ?>
<div class="glider-contain">
  <div class="glider">
    <div><img src="<?php echo constant('URL'); ?>public/assets/img/main/slider/baconSmokeHouse.jpg" alt=""></div>
    <div><img src="<?php echo constant('URL'); ?>public/assets/img/main/slider/blueCheeseBacon.jpg" alt=""></div>
    <div><img src="<?php echo constant('URL'); ?>public/assets/img/main/slider/frutillaWhispersCream.jpg" alt=""></div>
    <div><img src="<?php echo constant('URL'); ?>public/assets/img/main/slider/leGrandPlaisir.jpg" alt=""></div>
    <div><img src="<?php echo constant('URL'); ?>public/assets/img/main/slider/threeBurgers.jpg" alt=""></div>
  </div>
  <button aria-label="Previous" class="glider-prev">«</button>
  <button aria-label="Next" class="glider-next">»</button>
  <div role="tablist" class="dots"></div>
</div>
<h1 class="video__title">Videos</h1>
<div class="video__container">  
  <div class="video">
  <video width="100%" height="100%" controls>
  <source src="<?php echo constant('URL'); ?>public/assets/videos/juntosprotegidos.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
 Your browser does not support the video tag.
</video>
  </div>

  <div class="video">
  <video width="100%" height="100%" controls>
  <source src="<?php echo constant('URL'); ?>public/assets/videos/llegoCajitaFeliz.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
 Your browser does not support the video tag.
</video>
  </div>

</div>

<?php require_once '../app/views/footer.php';?>
<script src="<?php echo constant('URL'); ?>vendor/glider/glider.js"></script>
<script>
    new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '.dots',
  draggable: true
});
</script>
</body>
</html>