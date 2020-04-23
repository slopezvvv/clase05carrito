<!DOCTYPE html>
<html>
    <head>
        <title>El guaton de los comics spa.</title>
        <meta charset="UTF-8">
        <meta name="author" value="vespertinos" />
        <meta name="description" value="Este es un sitio web para la venta de comics" />
        <link rel="icon" type="image/jpg" href="img/favicon_comics.jpg">
        
        <link href="estilos/estilos_index.css" rel="stylesheet" type="text/css"/>
        <script src="js/index_scripts.js" type="text/javascript"></script>
    </head>
    <body onload="
        console.log(calcularPI());
        efectoFadeIn();
    ">
        <div id="wrapper">
            <h1 id='titulo_pagina'>Bienvenidos al guaton de los comics E-shop ®</h1>
            <nav>
                <a href="#">Inicio</a>
                <a href="#catalogo">Catalogo</a>
                <a href="#ubicacion">Ubicación</a>
                <a href="#contacto">Contacto</a>
                <a href="https://www.google.com">Ir a google</a>
            </nav>
            
            <?php
            include 'catalogo.php';
            include 'ubicacion.php';
            include 'contacto.php';
            ?>
            
        </div>
    </body>
</html>
