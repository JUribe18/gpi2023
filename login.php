<?php
  // Inicia la sesión 
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Tu Tienda Online</title>
  <link rel="stylesheet" href="Assets/CSS/login.css">
  <link rel="stylesheet" href="Assets/CSS/futerheader.css">
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

  <!-- Contenido de la página de login -->
  <div class="login">
    <div class="login-container">  
      <form id="loginForm" action="php/login_be.php" method="POST"> 
        <h2>Iniciar Sesión</h2>
        <label for="email">Correo</label>
        <input type="text" id="email" name="correo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="contraseña">
        <label for="remember">
          <input type="checkbox" id="remember" name="remember"> Recordar datos
        </label>
        <br>
        <a href="#" onclick="showRegisterForm()">No tienes cuenta? Regístrate</a><br>
        <a href="#" onclick="showForgotPasswordForm()">Olvidaste tu contraseña?</a>
        <br>
        <input type="submit" value="Iniciar sesión">
      </form>
      <!-- Formulario para registro -->
      <form id="registerForm" action="php/registro_be.php" method="POST" style="display: none;">
        <h2>Regístrate</h2>
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="usuario" pattern="[a-zA-Z0-9]{6,}" title="Ingrese un nombre de usuario válido (solo letras y números, mínimo 6 caracteres)" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="contraseña" pattern="^(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}$" title="La contraseña debe tener al menos 8 caracteres, incluir al menos una mayúscula y un número" required>
        <br>
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="correo" required>
        <br>
        <input type="submit" value="Registrarse">
      </form>
       <!-- Formulario para recuperar contraseña -->
       <form id="forgotPasswordForm" style="display: none;" action="#" method="post">
        <h2>Reestablecer Contraseña</h2>
        <label for="forgotEmail">Correo electrónico asociado:</label>
        <input type="email" id="forgotEmail" name="forgotEmail" required>
        <br>
        <label for="forgotPhone">Número de teléfono asociado:</label>
        <input type="tel" id="forgotPhone" name="forgotPhone" pattern="[0-9]{10}" title="Ingrese un número de teléfono válido (solo números)" required>
        <br>
        <input type="submit" value="Recuperar contraseña">
      </form>
    </div>
  </div>


  <script src="Assets/JS/login-script.js"></script>
</body>
</html>
