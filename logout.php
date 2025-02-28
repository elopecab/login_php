<?php

// Iniciamos sesion para poder eliminarla
session_start();

// Destruimos la sesion actual del usuario
session_destroy(); 
setcookie("usuario", "", time() - 3600, "/");

// Redirigimos al login 
header("Location: index.php");
exit();
?>