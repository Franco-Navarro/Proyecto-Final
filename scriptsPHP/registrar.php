<?php 
        include("dbParametros.inc");
        
        $log  = $_POST['usuario'];
        $cont = $_POST['contraseña'];
        $email = $_POST['email'];
        $suscripcion = $_POST['tipoSuscripcion'];


        if($suscripcion == 2) {
            $numero  = $_POST['numero'];
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fecha'];
            $codigo = $_POST['codigo'];
            $dni = $_POST['dni'];

            echo "Datos de registro: USUARIO  $log CONTRASEÑA $cont EMAIL $email SUSCRIPCION $suscripcion \n
            Datos de tarjeta: NUMERO $numero NOMBRE $nombre FECHA $fecha CODIGO $codigo DNI $dni";
            exit();

        }
        else {
            echo "Datos de registro: USUARIO  $log CONTRASEÑA $cont EMAIL $email SUSCRIPCION $suscripcion";
        }
        



        $respuesta_estado = "";
        $registro_exitoso = "";
    
        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $password);

    
        $sql="insert into usuarios (login, contraseña, ingresos) value (:login, :contrasena, 0);";

        try {
            $stmt = $dbh->prepare($sql);
            $respuesta_estado = $respuesta_estado . "Preparacion exitosa!";
        } catch (PDOException $e) {
            $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        };
        try {
            $stmt->bindParam(':login', $log);
            $stmt->bindParam(':contrasena', $cont);
            $respuesta_estado = $respuesta_estado . " - Binding exitoso! ";
        } catch (PDOException $e) {
            $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        };
        try {
            $stmt->execute();
            $respuesta_estado = $respuesta_estado . " - Ejecucion exitosa! ";
            $registro_exitoso = "Usuario registrado exitosamente \n Login: $log - Contraseña: $cont";
        } catch (PDOException $e) {
            $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        }; 
        
    
        $dbh = null;
    
        echo $registro_exitoso;
?>