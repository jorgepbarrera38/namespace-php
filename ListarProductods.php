<?php
    include 'autoload.php';

    use Controlador\Producto as ControladorProducto;
    use Modelo\Producto as ModeloProducto;

    $productControlador = new ControladorProducto();
    echo $productControlador->crearProducto();

    echo "<br>";
    echo "<br>";

    $productModelo = new ModeloProducto();
    echo $productModelo->crearProducto();