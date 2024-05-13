<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="../controller/UsuarioController.php" method="post">
            <input type="hidden" name="action" value="login">
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Contraseña" required><br><br>
            <button type="submit">Iniciar Sesión</button><br><br>
            <a href="registro.php">¿No tienes una cuenta? Regístrate aquí</a>
        </form>
    </div>
</body>
</html>