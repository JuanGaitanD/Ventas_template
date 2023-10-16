<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('estructura/head.php')?>
</head>

<?php 
  session_start();
  if(!$_SESSION['user']->rol == "admin"){
    echo "<script>window.location.href='login.php'</script>";
  }

  if(isset($_GET['delete'])){
    session_destroy();
    echo "<script>window.location.href='login.php'</script>";
  }

  require_once('class/producto.php');
  require_once('class/cate.php');

  $obj = new producto();
  $obj_cate = new cate();

  if(isset($_POST['add'])){
    $id_categoria = $_POST['id_categoria'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $stock = $_POST['stock'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $dato = [$id_categoria, $codigo, $nombre, $descripcion, $imagen, $stock, $precio_compra, $precio_venta];

    $obj->insertar_producto($dato);

    $obj = new producto();
    echo "<script>alert('Actualización de producto completada con exito')</script>";
  }

  if(isset($_POST['edit'])){
    $dato = [$_POST['id'], $_POST['id_categoria'], $_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['imagen'], $_POST['stock'], $_POST['precio_compra'], $_POST['precio_venta']];
    $obj->editar($dato);

    $obj = new producto();
    echo "<script>alert('Edición completada con exito')</script>";
  }

  if(isset($_GET['function'])){
    if($_GET['function'] == "eliminar"){
        $obj->eliminar($_GET['id']);
        $obj = new producto();
        echo "<script>alert('Eliminación completada con exito')</script>";
    }
  }
?>

<body>
    <div class="row navbar">
        <div class="col-lg-2">
            <a href="dashboard.php"><center><img src="img/logo.png" alt="No se cargó la imagen" width="30%"></center></a>
        </div>
        <div class="col-lg-10" id="menu">
            <?php require_once('estructura/dash_menu.php')?>
        </div>
    </div>

    <div class="container">
        <br>
        <h1>Productos</h1>
        <br>

        <div>
          <form action="dsh_productos.php" method="post" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
            <input type="hidden" name="id" id="id" value="">
            
            <select class="form-control form-select" name="id_categoria" id="id_categoria" required="required">
                <option value="">Categoria</option>
                <?php 
                  for($i=0; $i<count($obj_cate->categorias); $i++){
                ?>
                <option value="<?php echo $obj_cate->categorias[$i]->id?>"><?php echo $obj_cate->categorias[$i]->categoria?></option>
                
                <?php
                  }
                ?>
            </select>

            <input type="number" name="codigo" id="codigo" placeholder="Codigo" required="required"class="form-control">

            <input type="text" placeholder="Nombre" required="required" name="nombre" id="nombre" class="form-control">

            <input type="text" placeholder="Descripción" required="required" name="descripcion" id="descripcion" class="form-control">

            <select name="imagen" id="imagen" required="required" class="form-select">
                <option value="">img</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>

            <input type="number" name="stock" id="stock" placeholder="Stock" class="form-control" required="required">
            <input type="number" name="precio_compra" id="precio_compra" placeholder="Precio de compra" class="form-control" required="required">
            <input type="number" name="precio_venta" id="precio_venta" placeholder="Precio de venta" class="form-control" required="required">

            <input type="submit" value="Agregar" class="btn btn-primary" name="add" id="add" style="grid-column-start: 1; grid-column-end: 3;">
            <input type="submit" value="Editar" class="btn btn-secondary" name="edit" id="edit" style="grid-column-start: 1; grid-column-end: 3; display:none;">
          </form>
          <hr>
          <br>
        </div>

        <table class="table table-hover">
            <tr>
                <th>Categoria</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Stock</th>
                <th>Precio Compra</th>
                <th>Precio Venta</th>
                <th>Action</th>
            </tr>
            <?php 
                for($i=0; $i<count($obj->productos); $i++){
            ?>
            <tr>
                <td><?php echo $obj->productos[$i]->id_categoria; ?></td>
                <td><?php echo $obj->productos[$i]->codigo; ?></td>
                <td><?php echo $obj->productos[$i]->nombre; ?></td>
                <td><?php echo $obj->productos[$i]->descripcion; ?></td>
                <td><?php echo $obj->productos[$i]->imagen; ?></td>
                <td><?php echo $obj->productos[$i]->stock; ?></td>
                <td><?php echo "$".$obj->productos[$i]->precio_compra; ?></td>
                <td><?php echo "$".$obj->productos[$i]->precio_venta; ?></td>
                <td>
                    <button class="btn btn-outline-dark" onclick="llenar_form_producto(<?php echo $obj->productos[$i]->id; ?>, <?php echo $obj->productos[$i]->id_categoria; ?>, <?php echo $obj->productos[$i]->codigo; ?>, '<?php echo $obj->productos[$i]->nombre; ?>', '<?php echo $obj->productos[$i]->descripcion; ?>', '<?php echo $obj->productos[$i]->imagen; ?>', <?php echo $obj->productos[$i]->stock; ?>, <?php echo $obj->productos[$i]->precio_compra; ?>, <?php echo $obj->productos[$i]->precio_venta; ?>)">
                      <i class="bi bi-pencil-square"></i>
                    </button>

                    <a href="dsh_productos.php?function=eliminar&id=<?php echo $obj->productos[$i]->id; ?>" class="btn btn-outline-danger"><i class="bi bi-cart-x"></i></a>
                    
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  function llenar_form_producto(id, id_categoria, codigo, nombre, descripcion, imagen, stock, precio_compra, precio_venta){
    document.getElementById('id').value = id;
    document.getElementById('id_categoria').value = id_categoria;
    document.getElementById('codigo').value = codigo;
    document.getElementById('nombre').value = nombre;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('imagen').value = imagen;
    document.getElementById('stock').value = stock;
    document.getElementById('precio_compra').value = precio_compra;
    document.getElementById('precio_venta').value = precio_venta;

    document.getElementById('add').style.display = "none";
    document.getElementById('edit').style.display = "block";

    /* Scroll hasta arriba */
    var scroll = document.querySelector("h1");
    var scroll = scroll.offsetTop;
    window.scrollTo(0, scroll);
  }
</script>
</html>
