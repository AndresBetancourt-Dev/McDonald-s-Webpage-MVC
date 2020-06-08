<?php
if(isset($_SESSION['user'])){
  $currentUser = new CurrentUser('Listado');
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
    <title>McDonald's - Listado Clientes</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/listado.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">

</head>
<body>
<?php require_once '../app/views/header.php'; ?>

<section class="list__container">
<h1 class="list__title">Listado</h1>

<table>
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>E-mail</th>
      <th>Teléfono</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($this->customers as $customers){
      $customer = new Customer();
      $customer = $customers;
  
    ?>
    <tr>
      <td><?php echo $customer->identification; ?></td>
      <td><?php echo $customer->name; ?></td>
      <td><?php echo $customer->email; ?></td>
      <td><?php echo $customer->phone; ?></td>
    </tr>
    <?php  } ?>
  </tbody>
</table>


</section>

<?php require_once '../app/views/footer.php'; ?>
    
</body>
</html>