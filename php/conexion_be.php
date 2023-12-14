<?php

    $conexion = mysqli_connect("localhost", "root", "", "nubekids");
   
    if ($conexion){
        echo 'conetado exitosamente papi';
        header("location: ../login.php");
    }else{
        echo 'no se ha podido conectar pai :c';
    }

    function obtenerConexion(){
        
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $bdd = 'NubeKids';

        $conect = new mysqli($servidor, $usuario, $contraseña, $bdd);
        if ($conect->connect_error) {
            die("Erro de conexion: ". $conect->connect_error);
        }
        return $conect; 
    }

    
?>