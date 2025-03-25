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
        <h1>Crea tu cuenta</h1>
    </div>
    <form action="/users/create" method="post">
        <input type="number" id="usuario" name="usuario" placeholder="Móvil" required>
        <input type="email" id="email" name="email" placeholder="Correo electrónico" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
        <input type="password" id="contrasena" name="contrasena"  placeholder="Contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$" required>
        <div class="form-register-login">
            <p>¿Ya tienes una cuenta?</p>
            <a href="/users/login/index">Iniciar sesión</a>
        </div>
        

        <div class="date-header">
            <label>Aviso legal</label>
            <p>Esta información no será pública. Confirma tu propia edad, incluso si esta cuenta es para una empresa, una mascota u otra cosa.</p>
        </div>
        
        
        <div class="submit-btn">
            <button type="submit">Siguiente</button>
        </div>
        
    </form>
</div>
</body>
</html>
