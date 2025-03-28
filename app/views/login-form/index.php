<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu cuenta</title>
    <link rel="stylesheet" href="../../css/register-form.css">
    
</head>
<body>
<div class="form-container">
    <div class="form-logo">
        <img class="logo" src="http://127.0.0.1:8000/img/logo/logo.png" alt="logo">
        <h1>Iniciar sesión</h1>
    </div>
    <form action="form_logic.php" method="post">
        <input type="number" id="usuario" name="usuario" placeholder="Móvil o email" required>
        <input type="password" id="contrasena" name="contrasena"  placeholder="Contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$" required>
        <div class="form-register-login">
            <p>¿No estás registrado?</p>
            <a href="/users/index">Crear una cuenta</a>
        </div>
        

        
        <div class="submit-btn">
            <button type="submit">Siguiente</button>
        </div>
        
    </form>
</div>
</body>
</html>
