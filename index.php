
<!--Iniciamos una sesion para poder usar variables de sesion -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        form { display: inline-block; padding: 20px; border: 1px solid #ccc; border-radius: 10px; background: #f9f9f9; }
        input { display: block; margin: 10px auto; padding: 8px; }
        button { padding: 10px; cursor: pointer; background: #28a745; color: white; border: none; }
    </style>
</head>
<body>
    <h2>Iniciar Sesión</h2>

<!--Si hay error de login, lo mostramos en pantalla -->
    <?php if (isset($_SESSION['error'])) { echo "<p style='color: red;'>{$_SESSION['error']}</p>"; unset($_SESSION['error']); } ?>
   
<!--El formulario envía los datos a el archivo login.php con el metodo POST-->
    <form action="login.php" method="POST">

<!--Campo para rellenar el correo electronico -->
        <input type="email" name="email" placeholder="Correo Electrónico" required>

<!--Campo para rellenar la contraseña-->
        <input type="password" name="password" placeholder="Contraseña" required>

<!--Boton para enviar los datos-->
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>