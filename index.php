<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('estructura/head.php')?>
    <?php require_once('estructura/scripts_up.php')?>
</head>

<?php
    require_once('class/producto.php');
    require_once('class/ventas.php');
    $venta = new ventas;
    $obj = new producto;

    session_start();
    if(!isset($_SESSION['user'])){
        echo "<script>window.location.href='login.php'</script>";
    }

    if(isset($_GET['delete'])){
        session_destroy();
        echo "<script>window.location.href='login.php'</script>";
    }
    
    require_once('estructura/back_carrito.php');
    ?>
<body>
    <div class="row" id="navbar"><?php require_once('estructura/menu.php')?></div>
    
    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide"><?php require_once('estructura/carrosel.php')?></div>
        <br>
        <br>
        <h1>Selección de productos</h1> 

        <!-- Aquí podemos variar un poco -->
        <div id="contenedor_productos">
            <div id="productos">
                <hr>
                <div id="productos_cards">
                    <h3 id="title_cards">Vinos Espumosos</h3>
                    <?php 
                    $i=0;
                    foreach($obj->productos as $objt){
                        if($objt->id_categoria == 6){
                    ?>
                            <div class="card" style="width: 18rem; padding: 10px">
                                <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                                <div class="card-body">
                                    <h5><?php echo $objt->nombre; ?></h5>
                                    <p class="card-text center"><?php echo $objt->descripcion; ?></p>

                                    <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $objt->id?>, '<?php echo $objt->nombre?>', <?php echo $objt->precio_venta?>, <?php echo $objt->codigo?>, 0)">Agregar producto</button></center>
                                    <br>
                                </div>
                            </div>
                            <?php 
                                $i++; 
                                if($i==4){
                                    break;
                                }
                            ?>
                    <?php       
                            }
                        }
                    ?>
                </div>

                <div id="productos_cards">
                    <h3 id="title_cards">Aperitivos</h3>
                    <?php 
                    $i=0;
                    foreach($obj->productos as $objf){
                        if($objf->id_categoria == 10){
                    ?>
                            <div class="card" style="width: 18rem; padding: 10px">
                                <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                                <div class="card-body">
                                    <h5><?php echo $objf->nombre; ?></h5>
                                    <p class="card-text center"><?php echo $objf->descripcion; ?></p>
                                    <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $objt->id?>, '<?php echo $objt->nombre?>', <?php echo $objt->precio_venta?>, <?php echo $objt->codigo?>, 0)">Agregar producto</button></center>
                                    <br>
                                </div>
                            </div>
                            <?php 
                                $i++; 
                                if($i==4){
                                    break;
                                }
                            ?>
                    <?php       
                            }
                        }
                    ?>
                    <br>
                </div>
            </div>

            <br>
        </div>
        
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    More
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div id="productos_cards">
                            <?php 
                            $i=0;
                            foreach($obj->productos as $objt){
                                
                            ?>
                                <div class="card" style="width: 18rem; padding: 10px">
                                    <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                                    <div class="card-body">
                                        <h5><?php echo $objt->nombre; ?></h5>
                                        <p class="card-text center"><?php echo $objt->descripcion; ?></p>
                                        <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $objt->id?>, '<?php echo $objt->nombre?>', <?php echo $objt->precio_venta?>, <?php echo $objt->codigo?>, 0)">Agregar producto</button></center>
                                        <br>
                                    </div>
                                </div>
                                <?php 
                                    $i++; 
                                    if($i==10){
                                        break;
                                    }
                                ?>
                            <?php       
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    
    <footer>
        <hr>
        <center><p><strong>Made by: </strong> Juan David Gaitán Díaz</p></center>
    </footer>
</body>
<?php require_once('estructura/scripts.php')?>


</html>
