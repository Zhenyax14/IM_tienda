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
        <h1>Añadir una casa</h1>
    </div>
    <form action="/admin/casas/store" method="post">


        <input type="text" id="titulo" name="titulo" placeholder="Titulo" required>
        <input type="number" id="metros" name="metros" placeholder="Metros cuadrados" required>
        <input type="text" id="precio" name="precio" placeholder="Precio" required>
        <input type="text" id="descripcion" name="descripcion"  placeholder="Descripción"  required>
        <input type="file" name="thumbnail">
        <!--- Esta parte de abajo de momento la omito, porque tiene su complejidad a la hora de modularizar
        Y como hoy es la entrega ya, no llego. Para tercer trimestre
        --->
        <input type="id_tipos" id="id_tipos" name="id_tipos" placeholder="Tipo" value="1" hidden>
        <input type="usuario-agente" id="usuario-agente" name="usuario-agente" placeholder="Agente" value="1" hidden>

        


        
        
        <div class="submit-btn">
            <button type="submit">Añadir</button>
        </div>
        
    </form>
</div>
</body>
</html>
