<?php

// Iniciamos sesion para acceder a los datos del usuario
session_start();

// Si el usuario no ha iniciado sesion lo redigirimos al login
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        button { padding: 10px; cursor: pointer; background: #dc3545; color: white; border: none; }
    </style>
</head>
<body>

<!--Mostramos el email del usuario autenticado -->
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?> 👋</h2>
    <p>Has iniciado sesión correctamente.</p>
    <p><strong>Cookie creada:</strong> <?php echo $_COOKIE['usuario'] ?? 'No disponible'; ?></p>

<!--Redirige a logout.php para eliminar la sesion -->
    <form action="logout.php" method="POST">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>