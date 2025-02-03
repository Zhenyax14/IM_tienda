<?php

define('DB_SERVER', 'localhost');  // Your database server (e.g., 'localhost')
define('DB_USERNAME', 'root');  // Your database username
define('DB_PASSWORD', '');  // Your database password
define('DB_DATABASE', 'ejercicio57_1');  // Your database name

// Create a new mysqli instance for the database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 ini_set('display_errors', 1);
 error_reporting(E_ALL);
// Comprobar que el método recibido no es nulo y es POST
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);
   
    

    $dni = htmlspecialchars($_POST['dni']) ?? '';
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']) ?? 0; 

  try {

  //Comienzo la transacción
    $conn->begin_transaction();
    // Parte genérica del usuario
    $stmt = $conn->prepare("INSERT INTO personas(dni, nombre, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $dni, $nombre, $telefono); 
    
    if($stmt->execute()) {
         //Categoria de conserje
     if(isset($_POST['categoria'])) {
        $categoria= htmlspecialchars($_POST['categoria']) ?? null;
        $stmt2 = $conn->prepare("INSERT INTO conserjes(dni, categoria) VALUES(?, ?)");
        $stmt2->bind_param("ss", $dni, $categoria);
     }elseif(isset($_POST['meses']) && $_POST['meses'] != ''){
        $meses = htmlspecialchars($_POST['meses']) ?? null;
        $stmt2 = $conn->prepare("INSERT INTO tecnicos(dni, meses) VALUES(?, ?)");
        $stmt2->bind_param("si", $dni, $meses);
     }elseif(isset($_POST['trienios']) && isset($_POST['departamento'])) {
        $trienios = htmlspecialchars($_POST['trienios']) ?? null;
        $departamento = htmlspecialchars($_POST['departamento']);
        $stmt2 = $conn->prepare("INSERT INTO profesores(dni, trienios, id_departamento) VALUES(?, ?, ?)");
        $stmt2->bind_param("sii", $dni, $trienios, $departamento);
     }
     $stmt2->execute();
     $conn->commit();
  //Ejecuto la transacción
    }else {
        throw new Exception("Error en isertar datos") ;
        
    }
     //Liberar recursos
     $stmt->close();
     $conn->close();
 
   
  }catch(Exception $e) {
    echo "Error en insertar a la base de datos";
   echo  $e->getMessage();
    $conn->rollback();
  }
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
