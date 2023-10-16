<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><center><img src="img/logo.png" alt="No se cargó la imagen" width="15%"></center></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="categorias.php">Categorías</a>
                <a class="nav-link" href="productos.php">Productos</a>
                <a class="nav-link" href="suscripcion.php">Suscripción</a>
                <?php require_once('estructura/carrito.php')?>
            </div>
        </div>
        <a id="finalizar_session" class="nav-link" href="index.php?delete=true">Finalizar sesión</a>
    </div>
</nav>