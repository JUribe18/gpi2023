<?php

  session_start(); 

  if(!isset($_SESSION["usuario"])){
    echo '
      <script>
        alert("Debes de iniciar sesion para continuar..");
        window.location("login.php");
      </script>
    ';
    header("location: login.php");
    session_destroy();
    die();
  }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Assets/CSS/futerheader.css">
    <link rel="stylesheet" href="Assets/CSS/profile.css">
</head>
<body>
    
  <!-- Navbar -->
  <?php
    if(isset($_SESSION["usuario"])){
      echo'<nav class = "navbar">';
      echo'<div class="logo">';
      echo'<img src="media/logo.png" alt="Logo de la empresa">';
      echo'<h1>NubeKids</h1>';
      echo'</div>';
      echo '<div class="navbar-links">';
      echo '<a href="index.php" class="nav-link">Inicio</a>';
      echo '<a href="profile.php" class="nav-link">Perfil</a>';
      echo '<a href="php/logout_be.php">Cerrar sesión</a>';
      echo '</div>';
      echo '</nav>';
    }else{
      echo'<nav class = "navbar">';
      echo'<div class="logo">';
      echo'<img src="media/logo.png" alt="Logo de la empresa">';
      echo'<h1>NubeKids</h1>';
      echo'</div>';
      echo '<div class="navbar-links">';
      echo '<a href="index.php" class="nav-link">Inicio</a>';
      echo '<a href="login.php" class="nav-link">Login</a>';
      echo '</div>';
      echo '</nav>';
    }
  ?>

  <div class="profile-content">
    <div class="profile-header">
      <div class="profile-pic">
        <img src="media/avatar.jpg" alt="FotoAvatar" >
      </div>
      <div class="profile-cred">
        <div class="creds">
          <p>Usuario</p>
          <p>Correo</p>
          <p>Datos</p>
        </div>
      </div>
    </div>
    <h2>Datos del cliente</h2>
    <div class="profile-desc">
      <div class="profile-data">
        <div class="data">
          <p>Nombre</p>
          <p>Rut</p>
          <p>Direccion</p>
        </div>
        <div class="profile-buttons">
          <button>Mis Reservas</button>
          <button>Ayuda</button>
        </div>
      </div>
      
    </div>
    
  </div>


</body>
</html>