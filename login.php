<?php

// Iniciamos sesion para poder almacenar datos del usuario
session_start();

// Simulamos usuarios con una array, hacemos una simulacion de usuarios y contraseñas
$usuarios = [
    "emilianofpoceano@gmail.com" => "password123",
    "admin@gmail.com" => "admin123"
];

// Recibimos el email y la contraseña enviados desde el formulario
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Verificamos si el usuario existe y si la contraseña es correcta
if (isset($usuarios[$email]) && $usuarios[$email] === $password) {

// Guardamos el email en la sesion para que el usuario este autenticado
    $_SESSION['usuario'] = $email;
    
// Creamos una cookie para recordar la ultima sesion, esta cookie guardara la fecha y hora del ultimo login durante 1 hora
    setcookie("usuario", $email, time() + 3600, "/");

// Redirigimos al usiario al panel si el login es correcto
    header("Location: dashboard.php");
    exit();
} else {

// Si el usuario o contraseña no fueran correctos lo enviamos de vuelta al login con un mensaje de error
    $_SESSION['error'] = "Credenciales incorrectas, intenta de nuevo.";
    header("Location: index.php");
    exit();
}
?>