<div id='catalogo'>
    <!-- 
    Informacion sin importancia relacionada con la página
    -->
    <?php
    
    include_once("Producto.php");
    
    $productosCatalogo = new ArrayObject();
    
    // Agregando productos al ArrayObject
    // Simulando la base de datos
    for($i = 0; $i < 10; $i++){
        $producto = new Producto($i, "Comic".$i, rand());
        $productosCatalogo->append($producto);
    }
    
    
    // Listar productos en el catálogo
    // Escribiendo html dentro del foreach
    foreach($productosCatalogo as $producto){
        ?>
        <div class='productos'>
            <img class='imagenes' src='img/spawn_0.jpg'>
            <p>ID_Producto: <?php echo($producto->getId()); ?></p>
            <p>Nombre Producto: <?php echo($producto->getNombre()); ?></p>
            <p>Precio: <?php echo($producto->getPrecio()); ?></p>
        </div>
        <?php
    }
    
    ?>
</div>