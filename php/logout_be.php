<?php
    // Inicia la sesión (si aún no está iniciada)
    session_start();

    // Elimina todas las variables de sesión
    session_unset();

    // Destruye la sesión
    session_destroy();

    // Redirige al usuario a la página de inicio o a donde desees
    header("Location: ../login.php"); // Cambia "index.php" por la página a la que quieres redirigir después del cierre de sesión
    exit();
?>