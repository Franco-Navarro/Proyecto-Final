<?php 
        include("dbParametros.inc");
        
        $log  = $_POST['usuario'];
        $cont = $_POST['contraseña'];
        $email = $_POST['email'];


        echo "Datos de registro: USUARIO  $log CONTRASEÑA $cont EMAIL $email";
        
        

?>