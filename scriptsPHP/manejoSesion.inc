<?php 
    Session_start();
    
    If(!isset($_SESSION['idSesion'])) {
        header('Location:login/InicioSesion.php');
        exit();
    }
?>