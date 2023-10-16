<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('estructura/head_login.php')?>
</head>
<?php require_once('class/client.php')?>
<?php
    $obj = new Client();
    session_start();
    session_destroy();


    if(isset($_POST['ingresar'])){
        $session = $obj->session($_POST['identif'], $_POST['clave']);

        if(!$session == null){
            session_start();
            $_SESSION['user'] = $session;
            $_SESSION['carrito'] = [];
            $_SESSION['i'] = 0;
            // $_SESSION['rol'] = $session->rol;

            if($_SESSION['user']->rol == "admin"){
                echo "<script>window.location.href='Dashboard.php'</script>";
            } else {
                //$_SESSION['user'] = $session; //No se valida del todo el admin - Ya valida, no habiamos puesto la parte de $_SESSION['user']
                // header('Location: index.php');
                echo "<script>window.location.href='index.php'</script>";
            }
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos.')</script>";
        }
    }

    if(isset($_POST['registrarse'])){
        $dato = [$_POST['identif'], $_POST['name'], $_POST['direccion'], $_POST['celular'], $_POST['clave']];
        $obj->insertar($dato);
        echo "<script>alert('Usuario registrado con éxito, ingrese con sus credenciales.')</script>";
        session_start();
    }
?>
<body>
    <div id="login">
        <div id="contenedor_login">
            <h2>Login - App Ventas</h2>
            <p>Ingrese sus datos de ingreso.</p>
            <center><form method="post" id="form_login">
                <input type="text" name="identif" id="identif" placeholder="Identificación" required="required" class="form-control">
                <input type="password" name="clave" id="clave" placeholder="Contraseña" required="required" class="form-control">

                <input type="submit" name="ingresar" value="Ingresar" class="btn btn-primary">
                <span style="color: #0a58ca; cursor: pointer;" onclick="control_login(1)">Registrarse</span>
            </form></center>
        </div>
    </div>

    <div id="register" style="display: none;">
        <div id="contenedor_login" style="margin-top: 100px;">
            <h2>Registro - App Ventas</h2>
            <p>Ingrese los siguientes datos para su registro.</p>
            <center><form method="post" id="form_login">
                <input type="text" name="identif" id="identif" placeholder="Identificación" required="required" class="form-control">
                <input type="text" name="name" id="name" placeholder="Nombre" required="required" class="form-control">
                <input type="text" name="direccion" id="direccion" placeholder="Dirección" required="required" class="form-control">
                <input type="text" name="celular" id="celular" placeholder="Celular" required="required" class="form-control">
                <input type="password" name="clave" id="clave" placeholder="Contraseña" required="required" class="form-control">

                <input type="submit" name="registrarse" value="Registrarse" class="btn btn-primary" onclick="control_login(2)">
                <input type="button" value="Regresar" class="btn btn-secondary" onclick="control_login(2)">
            </form></center>
        </div>
    </div>
</body>
<?php require_once('estructura/scripts.php')?>
</html>