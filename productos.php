<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('estructura/head.php')?>
    <?php require_once('estructura/scripts_up.php')?>
</head>

<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>window.location.href='login.php'</script>";
    }

    if(isset($_GET['delete'])){
        session_destroy();
        echo "<script>window.location.href='login.php'</script>";
    }

    require_once('class/producto.php');
    require_once('class/cate.php');
    $obj = new producto;
    $obj_cate = new cate;


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $precio = $_GET['precio'];
        $codigo = $_GET['codigo'];
        $cantidad = $_GET['cantidad'];
        
        $total = $cantidad * $precio;
        $product_carrito = [ "id" => $id, "nombre" => $nombre, "precio" => $precio, "codigo" => $codigo, "cantidad" => $cantidad, "subtotal" => $total];
        
        array_push($_SESSION['carrito'], $product_carrito);
        
        echo "<script>alert('Producto agregado al carrito'); window.location.href='productos.php';</script>";
        // print_r($_SESSION['carrito']);
        
        // header('Location: index.php');
    }

    // Elimina del carrito
    if(isset($_GET['eliminar'])){
        $id = $_GET['i'];
        unset($_SESSION['carrito'][$id]);
        $_SESSION['carrito'] =array_values($_SESSION['carrito']);

        echo "<script>alert('Producto eliminado del carrito'); window.location.href='productos.php';</script>";
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
        echo "<script>alert('Compra finalizada'); window.location.href='productos.php';</script>";
    }
?>

<body>
    <div class="row" id="navbar"><?php require_once('estructura/menu.php')?></div>

    <div class="container">
        <br>
        <div>
            <h3 id="title_cards">Todos los productos</h3>
            <hr>
            <form method="post" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px">
                <select name="filter" id="" class="form-control form-select" required="required">
                    <option value="">Categoria</option>
                    <?php 
                        for($i=0; $i<count($obj_cate->categorias); $i++){
                    ?>
                        <option value="<?php echo $obj_cate->categorias[$i]->id?>"><?php echo $obj_cate->categorias[$i]->categoria?></option>
                    <?php
                        }
                    ?>
                </select>
                <input type="submit" class="btn btn-primary" name="filtro" value="Filtrar">
                <br>
            </form>
            <div id="productos_cards">
                <?php 
                    require_once('estructura/productos.php');
                ?>
            </div>
            <br>
        </div>
    </div>
    
    <footer>
        <hr>
        <center><p><strong>Made by: </strong> Juan David Gaitán Díaz</p></center>
    </footer>
</body>
<?php require_once('estructura/scripts.php')?>
</html>
