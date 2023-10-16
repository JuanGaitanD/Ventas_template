<?php 
    if(!isset($_SESSION['user']) || $_SESSION['user']->rol == "cliente"){
        echo "<script>alert('No tienes acceso a esta página')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
?>