<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('estructura/head.php')?>
</head>

<?php 
  require_once('class/ventas.php');
  require_once('class/client.php');

  session_start();
  require_once('estructura/validacion_dash.php');
  // if($_SESSION['user']->rol == "cliente"){
  //   echo "<script>alert('No tienes acceso a esta página')</script>";
  //   echo "<script>window.location.href='login.php'</script>";
  // }


  if(isset($_GET['delete'])){
    session_destroy();
    echo "<script>window.location.href='login.php'</script>";
  }

  $obj = new ventas();
  $client = new client();
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
        <h1>Dashboard</h1>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <!-- Pedidos -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Pedidos
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Fecha</th>
                      <th>Cliente</th>
                      <th>Productos</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $largo_ventas = count($obj->ventas);
                    if(!$largo_ventas == 0){
                      for($i=0; $i<count($obj->ventas); $i++){
                    ?>
                      <tr>
                        <td><?php echo $obj->ventas[$i]->id;?></td>
                        <td><?php echo $obj->ventas[$i]->fecha;?></td>
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
                        <td><?php echo "$ ".number_format($obj->ventas[$i]->Total);?></td>
                      </tr>
                    <?php
                      }
                    } else {echo "<h2 style='background-color: black; color: white; text-align: center; padding: 20px 0;'>No hay ventas</h2>";}
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Usuarios -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Usuarios
              </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
              <div class="accordion-body">
                <table class="table table-hover">
                  <tr>
                      <th>#</th>
                      <th>Identificación</th>
                      <th>nombre</th>
                      <th>dirección</th>
                      <th>Telefono</th>
                  </tr>
                  <?php 
                      $largo = count($client->clientes);
                      if(!$largo == 0){

                      for($i=0; $i<$largo; $i++){
                  ?>
                  <tr>
                      <td><?php echo $client->clientes[$i]->id; ?></td>
                      <td><?php echo $client->clientes[$i]->identif; ?></td>
                      <td><?php echo $client->clientes[$i]->nombre?></td>
                      <td><?php echo $client->clientes[$i]->direccion?></td>
                      <td><?php echo $client->clientes[$i]->celular ?></td>
                  </tr>
                  <?php } } else {echo "<h2 style='background-color: black; color: white; text-align: center; padding: 20px 0;'>No hay clientes registrados</h2>";} ?>
                </table>
              </div>
            </div>
          </div>
        </div>
        <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
