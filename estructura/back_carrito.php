<?php 
    // Agrega al carrito
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $precio = $_GET['precio'];
        $codigo = $_GET['codigo'];
        $cantidad = $_GET['cantidad'];
        
        $total = $cantidad * $precio;
        $product_carrito = [ "id" => $id, "nombre" => $nombre, "precio" => $precio, "codigo" => $codigo, "cantidad" => $cantidad, "subtotal" => $total];
        
        array_push($_SESSION['carrito'], $product_carrito);
        
        echo "<script>alert('Producto agregado al carrito'); window.location.href='index.php';</script>";
        // print_r($_SESSION['carrito']);
        
        // header('Location: index.php');
    }

    // Elimina del carrito
    if(isset($_GET['eliminar'])){
        $id = $_GET['i'];
        unset($_SESSION['carrito'][$id]);
        $_SESSION['carrito'] =array_values($_SESSION['carrito']);

        echo "<script>alert('Producto eliminado del carrito'); window.location.href='index.php';</script>";
    }

    //Finalizar compra
    if(isset($_GET['finalizar'])){
        /* $dato = ["fecha", ["cliente_nombre", "direccion", "celular"], [ ["id", "producto_name", "precio", "cantidad", "subtotal"] ]*/
        $fecha = date("d-m-Y");
        $total = 0;
        foreach($_SESSION['carrito'] as $producto){
            $total += $producto['subtotal'];
        }

        $dato = [$fecha, $_SESSION['user'], $_SESSION['carrito'], $total];

        $venta->venta($dato);
        $_SESSION['carrito'] = [];
        echo "<script>alert('Compra finalizada'); window.location.href='index.php';</script>";
    }
?>