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
  
  require_once('class/client.php');

  $obj = new client();
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
      <h1>Users</h1>
      <br>
      <table class="table table-hover">
        <thead>
          <th>Identificación</th>
          <th>Nombre</th>
          <th>Dirección</th>
          <th>Celular</th>
          <th>Rol</th>
          <th></th>
        </thead>

        <tbody>
          <?php 
            for($i=0; $i<count($obj->clientes); $i++){
          ?>
            <tr>
              <td><?php echo $obj->clientes[$i]->identif?></td>
              <td><?php echo $obj->clientes[$i]->nombre?></td>
              <td><?php echo $obj->clientes[$i]->direccion?></td>
              <td><?php echo $obj->clientes[$i]->celular?></td>
              <td><?php echo $obj->clientes[$i]->rol?></td>
              <td>
                <button class="btn btn-outline-dark" onclick=""><i class="bi bi-pencil-square"></i></button>

                <a href="" class="btn btn-outline-danger"><i class="bi bi-cart-x"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script></script>
</html>
