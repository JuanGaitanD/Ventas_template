<?php 
    if(isset($_POST['filtro'])){
        $i = $_POST['filter'];
        foreach($obj->productos as $obj){
            if($obj->id_categoria == $i){
?>
                <div class="card" style="width: 18rem; padding: 10px">
                    <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                    <div class="card-body">
                        <h5><?php echo $obj->nombre; ?></h5>
                        <p class="card-text center"><?php echo $obj->descripcion; ?></p>
                        <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $obj->id?>, '<?php echo $obj->nombre?>', <?php echo $obj->precio_venta?>, <?php echo $obj->codigo?>, 2)">Agregar producto</button></center>
                        <br>
                    </div>
                </div>
<?php       
            }
        }
    } else {
        foreach($obj->productos as $obj){
?>
                <div class="card" style="width: 18rem; padding: 10px">
                    <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                    <div class="card-body">
                        <h5><?php echo $obj->nombre; ?></h5>
                        <p class="card-text center"><?php echo $obj->descripcion; ?></p>
                        <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $obj->id?>, '<?php echo $obj->nombre?>', <?php echo $obj->precio_venta?>, <?php echo $obj->codigo?>, 2)">Agregar producto</button></center>
                        <br>
                    </div>
                </div>
<?php
        }
    }
?>