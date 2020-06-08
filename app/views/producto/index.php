<?php
if(isset($_SESSION['user'])){
  $currentUser = new CurrentUser('Producto');
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
    <title>McDonald's - Producto</title>
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/product.css">
</head>
<body>
<?php require_once '../app/views/header.php'; ?>
        <section class="customerForm">
                <span class="customerFormTitle">Producto</span>
                 <div class="customerFormContainer">
                 <p class="customer__error"><?php echo $this->errorMessage; ?></p>
                        <form id="customerForm" action="<?php echo constant('URL');?>producto/productRegister" method="POST">
                            <label for="id">Código</label>
                            <input type="text" id="id" name="code" placeholder="Código del Producto" required>
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" placeholder="Nombre del Producto" required>
                            <label for="distribuidor">Imagen</label>
                            <input type="text" id="distribuidor" name="image" placeholder="Imagen del producto" required>
                            <label for="precio">Precio</label>
                            <input type="text" id="precio" name="price" placeholder="Precio" required>
                            <label for="existencias">Existencias</label>
                            <input type="text" id="existencias" name="quantity" placeholder="Existencias del Producto" required>
                            <label for="descripcion">Descripción</label>
                            <input type="text" id="descripcion" name="description" placeholder="Descripción del Producto" required>
                                <button class="button__form">
                                    Agregar
                                </button>
                        </form>
                 </div>
            </section>
<?php require_once '../app/views/footer.php';?>
</body>
</html>