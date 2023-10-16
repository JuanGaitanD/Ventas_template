<button type="button" class="btn" id="liveToastBtn">Carrito de compras</button>

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="width: 600px">
        <div class="toast-header">
        <!-- <img src="..." class="rounded me-2" alt="..."> -->
        <strong class="me-auto">Carrito de compras</strong>
        <small><?php echo count($_SESSION['carrito']);?> Productos</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <small>Usuario: <strong></small><?php echo $_SESSION['user']->nombre?></strong>
            <?php 
                if(isset($_SESSION['carrito']) && count($_SESSION['carrito'])>0){
            ?>
                <div class="m-4" id="productos_venta">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php 
                                // print_r($_SESSION['carrito']);
                                $total = 0; 
                                for($i=0; $i<count($_SESSION['carrito']); $i++){
                                    $total = $total + $_SESSION['carrito'][$i]['subtotal'];
                            ?>
                                    <tr>
                                        <td><?php echo $_SESSION['carrito'][$i]['nombre']?></td>
                                        <td><?php echo "$ ".number_format($_SESSION['carrito'][$i]['precio'])?></td>
                                        <td><?php echo $_SESSION['carrito'][$i]['cantidad']?></td>
                                        <td><?php echo "$ ".number_format($_SESSION['carrito'][$i]['subtotal'])?></td>
                                        <td><button class="btn btn-danger" onclick="eliminar(<?php echo $i?>)"><i class="bi bi-cart-x"></i></button></td>
                                    </tr>
                            <?php
                                }
                                
                            ?>
                        </tbody>
                    </table>
                </div>

                <div>
                    <center><h5>Total: <?php echo "$ ".number_format($total);?></h5></center>
                    <br>
                    <center><button class="btn btn-secondary" onclick="finalizar_compra()">Finalizar compra</button></center>
                </div>
            <?php
                } else {
                    echo "<center><h5 class='p-5'>No hay productos en el carrito</h5></center>";
                }
            ?>

            
        </div>
    </div>
</div>
