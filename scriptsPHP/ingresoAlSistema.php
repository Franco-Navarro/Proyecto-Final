<?php
    Session_start();
    include("dbParametros.inc");

    $login = $_POST['login'];
    $contraseña = $_POST['contraseña'];
    
    function autenticacion($log,$pas){
        include("dbParametros.inc");
        
        $aceptado;

        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);

        $sql="select * from usuarios where nombre=:nombre";

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':nombre', $log);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $fila = $stmt->fetch();

        if($fila['contrasenia'] == $pas) {
            $aceptado = true;
            $_SESSION['rol'] = $fila['fk_rol'];

        }
        else {
            $aceptado =  false;
        }
        $dbh = null;

        return $aceptado;
    }

    if (!isset($_SESSION['idSesion'])) {
        if(!autenticacion($login,$contraseña)){
            header('Location:../login/login.html');
            exit();
        }
        $_SESSION['idSesion'] = session_create_id();
        $_SESSION['login'] = $login;
    }
    header('Location:../index.php');
?>