<?php

    include 'conexion_be.php';

    function getuserdata($userId){
        $conexion = obtenerConexion();
        $consulta = "SELECT usuario, correo FROM usuarios WHERE id_usuario = $userId";
        $resultado = $conexion->query($consulta);

        //verifica si se consiguieron los datos
        if($resultado->num_rows > 0){ 
            $datos_user = $resultado -> fetch_assoc();
            $conexion -> close(); //cierra conexion con la bdd
            return $datos_user;
        }else{
            $conexion->close();
            return "VACIO"; //si no encuentra na, muestra vacio.
        }
    }

    $datos_usuario = getuserdata(1);

    $_SESSION['usuario'] = array(
      'user'=> $datos_usuario-> $usuario,
      'mail'=> $datos_usuario->$correo,
      
    );
  
    $nombreUsuario = $_SESSION['usuario']['usuario'];
    $correoUsuario = $_SESSION['usuario']['correo'];
?>