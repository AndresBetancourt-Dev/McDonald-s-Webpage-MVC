<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/assets/css/header.css">
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" type="image/x-icon">
    <script src="<?php echo constant('URL'); ?>public/assets/scripts/hamburguer.js"></script>
</head>
<body>  
<header class = "header">
<i class="icon-menu burger-button" id="burger-menu"></i>
        <div class="headerLogoContainer">
                <div class="headerImageContainer">
                        <a href="<?php echo constant('URL'); ?>home">
                                <img title="McDonald's Home" class="headerLogo" src="<?php echo constant('URL'); ?>public/assets/img/mcDonaldsLogo.png" alt="">
                        </a>   
                </div>
            </div>
    <nav class="headerNavigation menu">
         
        <ul class="headerNavigationList">
            <li class="headerlistElement">
                <a href="<?php echo constant('URL'); ?>menu" class="headerlistElementLink">
                    MENÚ
                </a>
            </li>
           
            <li class="headerlistElement">
                    <a href="<?php echo constant('URL'); ?>cliente" class="headerlistElementLink">
                        CLIENTE
                    </a>
            </li>
            <li class="headerlistElement">
                    <a href="<?php echo constant('URL'); ?>producto" class="headerlistElementLink">
                        PRODUCTO
                    </a>
            </li>
            <li class="headerlistElement">
                    <a href="<?php echo constant('URL'); ?>listado" class="headerlistElementLink">
                        LISTADO
                    </a>
            </li>
            <li class="headerlistElement">
                    <a href="<?php echo constant('URL'); ?>login" class="headerlistElementLink">
                        LOGIN
                    </a>
            </li>
        </ul>
    </nav>
</header>
</body>
</html>