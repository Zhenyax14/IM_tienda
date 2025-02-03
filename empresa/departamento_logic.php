<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
// Comprobar que el método recibido no es nulo y es POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    // Credenciales
    $host = '127.0.0.1'; 
    $username = "root";  
    $password = "";     
    $dbname = "ejercicio55"; 

    // Conexión
    $conn = new mysqli($host, $username, $password, $dbname);


    // Se transforman los caracteres especiales de html a sus equivalentes para evitar
    // ataques cross-script
    var_dump($_POST);
    $nombre = htmlspecialchars($_POST['nombre']);
    $pais = htmlspecialchars($_POST['pais']);

    $cif = $_POST['cif'] ?? '';
    
    if(isset($_POST['cif'])){
        $cif = htmlspecialchars($_POST['cif']);
    }
   
    
    
    

   

  try {
    // Se prepara la sentencia para evitar inyecciones de código malicioso
    $stmt = $conn->prepare("INSERT INTO empresas (cif, nombre, pais) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $cif, $nombre, $pais);

  }catch(Exception $e) {
    echo "Error en insertar a labase de datos";
    echo $e;
  }
    

    if ($stmt->execute()) {
        //redireccionar a la página principal
    } else {
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    // Se cierra la conexión
    $stmt->close();
    $conn->close();

   

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éxito</title>
</head>
<body>
    <a href="../index.html">Volver</a>
    <br>
    <br>
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=ejercicio55">Ir a la bd</a>
</body>
</html>
