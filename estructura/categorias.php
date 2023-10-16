<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <?php
            echo $obj->categorias[$i]->categoria;
        ?>
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                    <?php 
                        foreach($pro->productos as $producto){
                            if($producto->id_categoria == $obj->categorias[$i]->id){
                    ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="No se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                            }
                        }
                        $i++;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <?php
                    echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                        if($producto->id_categoria == $obj->categorias[$i]->id){
                            ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            <?php
                echo $obj->categorias[$i]->categoria;
            ?>
        </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                        if($producto->id_categoria == $obj->categorias[$i]->id){
                            ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            <?php
                echo $obj->categorias[$i]->categoria;
            ?>
        </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                        if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                }
                $i++;
                ?>
            </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            <?php
                echo $obj->categorias[$i]->categoria;
            ?>
            </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
            <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
            </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
            <?php
                echo $obj->categorias[$i]->categoria;
            ?>
        </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                    <?php 
                        foreach($pro->productos as $producto){
                            if($producto->id_categoria == $obj->categorias[$i]->id){
                                ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                            }
                        }
                        $i++;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
            <?php
                echo $obj->categorias[$i]->categoria;
            ?>
            </button>
        </h2>
        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen" aria-expanded="false" aria-controls="flush-collapseSixteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" aria-expanded="false" aria-controls="flush-collapseSeventeen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen" aria-expanded="false" aria-controls="flush-collapseEighteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen" aria-expanded="false" aria-controls="flush-collapseNineteen">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyOne" aria-expanded="false" aria-controls="flush-collapseTwentyOne">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyTwo" aria-expanded="false" aria-controls="flush-collapseTwentyTwo">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyThree" aria-expanded="false" aria-controls="flush-collapseTwentyThree">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyFour" aria-expanded="false" aria-controls="flush-collapseTwentyFour">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyFive" aria-expanded="false" aria-controls="flush-collapseTwentyFive">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentySix" aria-expanded="false" aria-controls="flush-collapseTwentySix">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentySix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentySeven" aria-expanded="false" aria-controls="flush-collapseTwentySeven">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentySeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyEight" aria-expanded="false" aria-controls="flush-collapseTwentyEight">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwentyNine" aria-expanded="false" aria-controls="flush-collapseTwentyNine">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseTwentyNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirty" aria-expanded="false" aria-controls="flush-collapseThirty">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirty" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtyOne" aria-expanded="false" aria-controls="flush-collapseThirtyOne">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtyOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtyTwo" aria-expanded="false" aria-controls="flush-collapseThirtyTwo">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtyTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtyThree" aria-expanded="false" aria-controls="flush-collapseThirtyThree">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtyThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtyFour" aria-expanded="false" aria-controls="flush-collapseThirtyFour">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtyFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtyFive" aria-expanded="false" aria-controls="flush-collapseThirtyFive">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtyFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtySix" aria-expanded="false" aria-controls="flush-collapseThirtySix">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtySix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                        ?>
                        <div class="card" style="width: 18rem; padding: 10px">
                            <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                            <div class="card-body">
                                <h5><?php echo $producto->nombre; ?></h5>
                                <p class="card-text center"><?php echo $producto->descripcion ?></p>
                                <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                                <br>
                            </div>
                        </div>
                    <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirtySeven" aria-expanded="false" aria-controls="flush-collapseThirtySeven">
                <?php
                echo $obj->categorias[$i]->categoria;
                ?>
            </button>
        </h2>
        <div id="flush-collapseThirtySeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body categorias_display">
                <div id="contenedor_productos">
                <?php 
                    foreach($pro->productos as $producto){
                    if($producto->id_categoria == $obj->categorias[$i]->id){
                ?>
                    <div class="card" style="width: 18rem; padding: 10px">
                        <img src="img/logo.png" class="card-img-top" alt="no se encontró la imagen">
                        <div class="card-body">
                            <h5><?php echo $producto->nombre; ?></h5>
                            <p class="card-text center"><?php echo $producto->descripcion ?></p>
                            <center><button class="btn btn-primary" id="agregar_boton" onclick="registrar(<?php echo $producto->id?>, '<?php echo $producto->nombre?>', <?php echo $producto->precio_venta?>, <?php echo $producto->codigo?>, 1)">Agregar producto</button></center>
                            <br>
                        </div>
                    </div>
                <?php
                    }
                    }
                    $i++;
                ?>
                </div>
            </div>
        </div>
    </div> -->
</div>