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

  require_once('class/cate.php');

  $obj = new cate();

  if(isset($_POST['agregar'])){
    $obj->insertar($_POST['cate']);
    $obj = new cate();
  }

  if(isset($_POST['editar'])){
    $obj->editar($_POST['id'], $_POST['cate']);
    $obj = new cate();
  }
  
  if(isset($_GET['funcion'])){
    if($_GET['funcion']=="eliminar"){
      $obj->eliminar($_GET['id']);
      $obj = new cate();
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
        <h1>Categorias</h1>
        <br>

        <div>
          <form action="dsh_cate.php" method="post">
            <div class="row">
              <div class="col-lg-3">
                  <input type="hidden" name="id" id="id" value="">
                  <input type="text" placeholder="Categoría" required="required" name="cate" id="cate" class="form-control">
              </div>
              <div class="col-lg-3">
                  <input type="submit" value="Agregar" id="agregar" class="btn btn-primary" name="agregar">
                  <input type="submit" value="Editar" class="btn btn-secondary" name="editar" id="editar" style="display: none;">
              </div>
            </div>
          </form>
          <hr>
          <br>
        </div>

        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            <?php
                $largo = count($obj->categorias);
                for($i=0; $i<$largo; $i++){
            ?>
            <tr>
                <td><?php echo $obj->categorias[$i]->id; ?></td>
                <td><?php echo $obj->categorias[$i]->categoria; ?></td>
                <td>
                    <button class="btn btn-outline-dark" onclick="llenar_form(<?php echo $obj->categorias[$i]->id; ?>, '<?php echo $obj->categorias[$i]->categoria; ?>')" ><i class="bi bi-pencil-square"></i></button> | 
                    <a class="btn btn-outline-danger" href="dsh_cate.php?funcion=eliminar&id=<?php echo $obj->categorias[$i]->id; ?>" style="text-decoration: none; color: red;"><i class="bi bi-cart-x"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
  function llenar_form($id, $dato){
    document.getElementById('id').value = $id;
    document.getElementById('cate').value = $dato;
    document.getElementById('editar').style.display = "block";
    document.getElementById('agregar').style.display = "none";

    /* Scroll hasta arriba */
    var scroll = document.querySelector("h1");
    var scroll = scroll.offsetTop;
    window.scrollTo(0, scroll);
  }
</script>
</html>
