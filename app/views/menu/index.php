<?php
if(isset($_SESSION['user'])){
    $currentUser = new CurrentUser('Menu');
    $currentUser->render();
}else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's - Menu</title>
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">

    <link rel="stylesheet" href="public/assets/css/menu.css">
</head>
<body>
<?php require_once '../app/views/header.php'; ?>
<h1 class="foodTitle">HAMBURGUESAS</h1>
            <section class="foodContainer">
                <div class="food">
                    <img src="public/assets/img/menu/club.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Club House</span>
                        <span class="foodTextDesc">
                            Hamburguesa de doble carne 100% Angus, con lechuga romana, tomate,<br/> cebolla grillada salsa especial y bacon rústico servida,<br/>mozarella en un pan tipo brioche.
                        </span>
                        <span class="foodPrice">
                            $30.000
                        </span>
                        <span class="foodId">
                            754126
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                    
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/clubpollo.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Club House Pollo</span>
                        <span class="foodTextDesc">
                            Hamburguesa de pechuga de pollo Crispy, con lechuga romana, tomate,<br/> cebolla grillada salsa especial y bacon rústico servida,<br/>mozarella en un pan tipo brioche.
                        </span>
                        <span class="foodPrice">
                            $30.000
                        </span>
                        <span class="foodId">
                            754127
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/crispy.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Crispy Onion</span>
                        <span class="foodTextDesc">
                            Hamburguesa de doble carne 100% Angus, salsa de tomate,<br/> cebolla grillada y cebolla caramelizada, bacon rústico servida,mozarella<br/>, en un pan tipo brioche.
                        </span>
                        <span class="foodPrice">
                            $29.700
                        </span>
                        <span class="foodId">
                            8956412
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/doble.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Doble Mcnífica</span>
                        <span class="foodTextDesc">
                            Hamburguesa de doble carne 100% Angus, salsa de tomate,<br/> lechuga romana, tomate, cebolla , mostaza<br/> queso cheddar, en un pan de ajonjolí.
                        </span>
                        <span class="foodPrice">
                            $20.000
                        </span>
                        <span class="foodId">
                            8956413
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/mcbacon.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">McBacon Triple</span>
                        <span class="foodTextDesc">
                            Hamburguesa de triple carne 100% Angus, salsa de tomate,<br/> pepinillo, tomate, cebolla , mostaza<br/> doble queso cheddar, bacon, en un pan de ajonjolí.
                        </span>
                        <span class="foodPrice">
                            $20.000
                        </span>
                        <span class="foodId">
                            8956414
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/doblecuarto.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Doble Quarto</span>
                        <span class="foodTextDesc">
                            Hamburguesa de doble carne 100% angus, <br/> cebolla, salsa especial y pepinillos servida<br/> en un pan de ajonjolí.
                        </span>
                        <span class="foodPrice">
                            $7.500
                        </span>
                        <span class="foodId">
                            754129
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/triple.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Triple Hamburguesa</span>
                        <span class="foodTextDesc">
                            Hamburguesa de Triple carne 100% angus, queso cheddar<br/> cebolla grillada salsa especial, mostaza pepinillos<br/> en un pan tipo brioche.
                        </span>
                        <span class="foodPrice">
                            $12.000
                        </span>
                        <span class="foodId">
                            754130
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/bigmac.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">BigMac</span>
                        <span class="foodTextDesc">
                            Pruebala deliciosa Big Mac de McDonald's Colombia.<br/> Dos hamburguesas de pura carne con salsa especial<br/> Big Mac y queso derretido.

                        </span>
                        <span class="foodPrice">
                            $10.900
                        </span>
                        <span class="foodId">
                            895625
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/mcbaconorg.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">McBacon</span>
                        <span class="foodTextDesc">
                            Hamburguesa de doble carne 100% angus, <br/> cebolla, salsa especial y bacon rústico servida<br/> en un pan de ajonjolí
                        </span>
                        <span class="foodPrice">
                            $8.900
                        </span>
                        <span class="foodId">
                            754555
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/mcnifica.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Mcnífica </span>
                        <span class="foodTextDesc">
                            Es real y es magnífica.<br/>
       Comencemos con una gran hamburguesa de pura carne y queso.<br/> Luego agreguemos tomate fresco, lechuga y cebolla con ketchup, mostaza y mayonesa.<br/> Es más que buena, es magnífica.
                        </span>
                        <span class="foodPrice">
                            $10.000
                        </span>
                        <span class="foodId">
                            856289
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/cuarto.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Cuarto de Libra</span>
                        <span class="foodTextDesc">
                            Prueba la deliciosa hamburguesa cuarto de libra con queso: <br>  la compañía perfecta para que <br>la hamburguesa no se sienta sola.
                        </span>
                        <span class="foodPrice">
                            $7.000
                        </span>
                        <span class="foodId">
                            908564
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/mcpollo.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">McPollo</span>
                        <span class="foodTextDesc">
                            Una combinación insuperable.<br> y gotas de mayonesa... y sí ,algunos ingredientes <br>están destinados a ir de la mano.
                        </span>
                        <span class="foodPrice">
                            $8.000
                        </span>
                        <span class="foodId">
                            999555
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/pollo.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Pollo</span>
                        <span class="foodTextDesc">
                            Hamburguesa de pollo apanado <br>acompañada con lechuga y mayonesa baja engrasa.
                        </span>
                        <span class="foodPrice">
                            $5.000
                        </span>
                        <span class="foodId">
                            102455
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/queso.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Queso</span>
                        <span class="foodTextDesc">
                            Hamburguesa con pan fresco caramelizado, carne de 50 gramos, queso cheddar,<br> cebolla, pepinillos, salsa de tomate y mostaza McDonald's.
                        </span>
                        <span class="foodPrice">
                            $4.000
                        </span>
                        <span class="foodId">
                            105855
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                    </div>
                </div>
                <div class="food">
                    <img src="public/assets/img/menu/generic.png" alt="" class="foodImage">
                    <div class="foodText">
                        <span class="foodDescription">Original</span>
                        <span class="foodTextDesc">
                            Hamburguesa con pan fresco caramelizado, carne de 50 gramos, <br>cebolla, pepinillos, salsa de tomate y mostaza intensa de McDonald's.
                        </span>
                        <span class="foodPrice">
                            $3.000
                        </span>
                        <span class="foodId">
                            754126
                        </span>
                        <span class="foodQuantity">Cantidad : 100</span>
                        
                    </div>
                </div>


            </section>
</body>
</html>