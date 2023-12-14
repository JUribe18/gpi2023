// Función para mostrar formulario de registro y ocultar el de inicio de sesión
function showRegisterForm() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registerForm").style.display = "flex";
    document.getElementById("forgotPasswordForm").style.display = "none";
}

// Función para mostrar formulario de recuperar contraseña y ocultar el de inicio de sesión
function showForgotPasswordForm() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registerForm").style.display = "none";
    document.getElementById("forgotPasswordForm").style.display = "flex";
}
