<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('estructura/head.php') ?>
    <?php require_once('estructura/scripts_up.php') ?>
</head>

<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        echo "<script>window.location.href='login.php'</script>";
    }

    if (isset($_GET['delete'])) {
        session_destroy();
        echo "<script>window.location.href='login.php'</script>";
    }

    if(isset($_POST['correo'])){
        $correo = $_POST['correo'];
        $archivo = fopen("suscripciones.txt", "a+");
        fwrite($archivo, $correo."\n");
        fclose($archivo);
        
        echo "<script>alert('¡Gracias por suscribirte! Recibiras noticias sobre nosotros. Puedes seguir navegando por la página.');</script>";
    }
?>

<body>
    <div class="row" id="navbar"><?php require_once('estructura/menu.php') ?></div>

    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide"></div>
        <br>
        <br>
        <center>
            <h1>¡Suscribete!</h1>
        </center>

        <center><img src="img/logo.png" alt="No se encontró la imagen"></center>
        <form method="post" class="form-floating" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px" id="form_suscripcion">
            <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingresa tu correo" required="required">
            <label for="correo">Correo electronico</label>
            <input type="submit" value="Suscribirse!" class="btn btn-secondary">
        </form>
        <br>
    </div>

    <footer>
        <hr>
        <center>
            <p><strong>Made by: </strong> Juan David Gaitán Díaz</p>
        </center>
    </footer>
</body>
<?php require_once('estructura/scripts.php') ?>

</html>