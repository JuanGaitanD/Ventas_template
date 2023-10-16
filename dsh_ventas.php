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
  
  require_once('class/ventas.php');

  $obj = new ventas();

  if(isset($_GET['eliminar_venta'])){
    $obj->delete($_GET['eliminar_venta']);
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
      <h1>Pedidos</h1>
      <br>

      <table class="table  table-hover table-striped">
        <tr>
          <th>#</th>
          <th>Fecha</th>
          <th>Cliente</th>
          <th>Productos</th>
          <th>Total</th>
          <th></th>
        </tr>
        <?php 
          $largo_ventas = count($obj->ventas);
          if(!$largo_ventas == 0){

          for($i=0; $i<$largo_ventas; $i++){
        ?>
        <tr>
          <td><?php echo $obj->ventas[$i]->id; ?></td>
          <td><?php echo $obj->ventas[$i]->fecha; ?></td>
          <td>
            <b style="color:red;">Identificación: </b><?php echo $obj->ventas[$i]->cliente->identif; ?><br>
            <b style="color:red;">Cliente: </b><?php echo $obj->ventas[$i]->cliente->nombre; ?><br>
            <b style="color:red;">Dirección:</b> <?php echo $obj->ventas[$i]->cliente->direccion; ?><br>
            <b style="color:red;">Celular:</b> <?php echo $obj->ventas[$i]->cliente->celular; ?>
          </td>
          <td>
            <ul class="list-group">
              <?php
                for($j=0; $j<count($obj->ventas[$i]->productos); $j++){
                  echo "<li class='list-group-item'><span class='badge bg-primary rounded-pill'> ".$obj->ventas[$i]->productos[$j]->cantidad."</span>&nbsp&nbsp".$obj->ventas[$i]->productos[$j]->nombre."</li>";
                }
              ?>
            </ul>
          </td>
          <td><?php echo "$".number_format($obj->ventas[$i]->Total); ?></td>
          <td>
            <!-- <button class="btn btn-outline-dark" onclick=""><i class="bi bi-pencil-square"></i></button> -->

            <a href="dsh_ventas.php?eliminar_venta=<?php echo $i?>" class="btn btn-outline-danger"><i class="bi bi-cart-x"></i></a>
          </td>
        </tr>
        <?php } } else {echo "<h2 style='background-color: black; color: white; text-align: center; padding: 20px 0;'>No hay ventas</h2>";} ?>
      </table>  
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script></script>
</html>
