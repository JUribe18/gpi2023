<?php

    include 'conexion_be.php';
        
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    
    $query = "INSERT INTO usuarios(usuario, contraseña, correo, privilegios) VALUES ('$usuario', '$contraseña', '$correo', 0)";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("El Usuario ingresado ya existe, prueba con otro");
                window.location = "../login.php";
                </script>
        ';
        exit();
    }
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("El correo ingresado ya existe, prueba con otro");
                window.location = "../login.php";
                </script>
        ';
        exit();
    }
    
    
    
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado Exitosamente!);
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo nuevamente, el usuario no fue almacenado");
                window.location = "../login.php";
            </script>
        ';
    }
    mysqli_close($conexion);
?>