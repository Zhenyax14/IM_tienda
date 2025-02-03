<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestiónApp || Empleados</title>
    <style>

            * {
                margin: 0;
                padding: 0;
            }

            .hidden {
                display: none;
            }

            header {
                padding: 10px;
                display: flex;
                position: fixed;
                width: 100%;
                background-color: rgb(217, 218, 172);
                color: #53a3e4;
                align-items:center;
                justify-content: space-around;
               
                
                
            
                .logo {
                    text-transform: capitalize; 
                    margin-right: 30%;
                    margin-left: -10%;
                    min-width: 100px;
                }

                nav {
                    
                   
                    
                    ul {
                        float: right;
                        list-style: none;
                        display: flex;
                            
                       
                  li {
                    
                    margin-right:15% ;
                   
                   
                   
                    &:last-child a {
                        
                            border: 1px solid #53a3e4;
                        }
                  
                        a{
                        
                        text-decoration: none;
                        color: black;
                        border-radius: 4px;
                        padding: 4px;
                        width: 100%;
                       
                        }

                        .contact-btn:hover {
                            background-color: #53a3e4;
                            padding: 4px;
                            color: aliceblue;
                            border-radius: 4px;
                        }

                       
                    }
                 }     
                }
            }
           
            #form-container {
                display: flex;
                padding-top: 10%;;
                flex-direction: column;
                width: 100%;
                align-items: center;
                background-color: rgb(247, 236, 221);
                padding: 15% 0 15% 0;
                
                
                h2 {
                    text-transform: uppercase;
                    color: rgb(120, 175, 231);
                    margin-bottom: 2%;
                }

                form {
                    background-color: rgb(228, 230, 169);
                    width: 20%;
                    
                    padding: 30px;
                    min-width: 400px;
                    min-height: 400px;
                    height: 100%;
                    border-radius: 15px;
                    align-content: center;
                    
                    .especializacion {
                       
                        width: 50%;
                        border: 3px dashed white;
                        background-color:rgb(226, 234, 145);
                        min-height: 150px;
                        padding: 4%;
                        justify-content: center;
                        margin-left: 20%;
                    }
                    
                    input {
                        height: 30px;
                        width: 95%;
                        margin: 0 0 3% 0;
                        border: 1px solid #53a3e4;
                        border-radius: 5px;
                        
                    }

                    span {
                        color: rgb(176, 170, 170);
                    }

                    #profesor, #conserje, #tecnico, .tiposEmpleados {

                        text-align: center;
                        text-transform: uppercase;
                        font-style: italic;
                        
                       label {
                        color:#53a3e4;
                        
                       }
                        select, input{
                            margin-left: 0.1%;
                            width: 95%;
                            border: 1px solid rgb(255, 255, 255);
                            border-radius: 5px;
                            height: 30px;
                            background-color:rgb(255, 255, 255);
                            color:rgb(90, 80, 46);
                            margin: 3% 0 1% 0;
                         
                        }

                       
                    }

                    .btn-wrapper {
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        .submit-btn {
                            width: 60%;
                            
                            margin-top: 20px;
                            
                            background-color: rgb(61, 172, 224);
                            padding: 4px;
                            color: aliceblue;
                            border: 0;
                            border-radius: 4px;
                        }
                    }
                  

                .submit-btn:hover {
                    background-color: rgb(92, 214, 245);
                    cursor: pointer;
                }
                
                }


                    
                    
                }
            
            footer {
                
                width: 100%;
                height: 150px;
                background-color: rgb(65, 65, 65);
                color: aliceblue;
                text-align:center;
                align-content: end;
                padding-bottom: 10px;
                
            }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>GestiónAPP</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="../index.php" class="contact-btn">Volver</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="form-container">
        <h2>Introduce tu empleado</h2>
       
               

            <!-- PARTE COMÚN DE usuario -->
                <form action="empleado_logic.php" method="POST">
                     <!-- DNI -->
                     <div>
                        <label for="dni"> <span>*</span> </label>
                        <input type="text" name="dni" id="dni" required placeholder="DNI">
                    
                     </div>
                     <div>
                        <!-- Nombre -->
                        <label for="nombre"><span>*</span></label>
                        <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
                     </div>
                    
                     <div>
                        <!-- Móvil -->
                        <label for="telefono"><span>*</span> </label>
                        <input type="tel" name="telefono" id="telefono" required placeholder="Móvil">
                    </div>
                   <section class="especializacion">
                  
                        <!-- Selección del empleado -->
                        <div class="tiposEmpleados">
                            <label for="tipoEmpleado"><span>*</span> Tipo de empleado: </label>
                            <select id="tipoEmpleado" name="tipoEmpleado" required onchange="updateForm()">
                                <option value="" selected disabled>Seleccionar tipo</option>
                                <option value="conserje">Conserje</option>
                                <option value="tecnico">Técnico</option>
                                <option value="profesor">Profesor</option>
                            </select>
                            
                        </div>


                    <!--- ESPECIALIZACIONES -->
                        <!-- Categoria de conserje -->
                        <div id="conserje" class="hidden">
                            <label for="categoria"></label>
                            <select name="categoria" id="categoria">
                                <option value="" selected disabled>Seleciona la categoria</option>
                                <?php
                                    for($i=0; $i<11; $i++) {
                                        echo "<option name=\"categoria\" id=\"categoria\" value=$i>$i</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <!-- Meses de servicio tecnico -->
                        <div id="tecnico" class="hidden">
                            <label for=""></label>
                            <input type="number" name="meses" id="meses" placeholder="Meses de servicio">
                        </div>

                        <!-- Profesores-->
                        <div id="profesor" class="hidden">
                            <label for="departamento"></label>
                            <select name="departamento">
                            <option value="" selected disabled>Seleccionar categoría</option>
                            <?php
                                define('DB_SERVER', 'localhost');  // Your database server (e.g., 'localhost')
                                define('DB_USERNAME', 'root');  // Your database username
                                define('DB_PASSWORD', '');  // Your database password
                                define('DB_DATABASE', 'ejercicio57_1');  // Your database name
                                
                                // Create a new mysqli instance for the database connection
                                $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                                
                                // Check the connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                
                                // Define the SQL query
                                $sql = "SELECT id, nombre FROM departamentos";
                                
                                // Execute the query
                                $result = $conn->query($sql);
                                
                                // Check if the query returned any rows
                                if ($result->num_rows > 0) {
                                    // Loop through the result set and output the options
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $nombre = $row['nombre'];
                                
                                        // Output the option for each department
                                        echo "<option name=\"departamento\"  id=\"departamento\" value=\"$id\">$nombre</option>";
                                    }
                                } else {
                                    echo "<option>No departments found</option>";
                                }
                                
                                // Close the connection
                                $conn->close();
                                ?>
                            </select>
                            <div>
                                <!-- Trienios -->
                                <label for="trienios"></label>
                                    <input type="number" name="trienios" id="trienios" placeholder="Trienios">
                            </div>
                        </div>
                        
                   </section>
                   <div class="btn-wrapper">
                            <input class="submit-btn" type="submit" value="Añadir">
                        </div>
                </form>
        </section>      
    </main>
    <footer>
        <p> 2025 Hecho con 👽 Todos los derechos reservados</p>
    </footer>

    <!-- La idea es mía, la implementación es de ChatGPT porque no sé JavaScript todavía -->
    <script>
        function updateForm() {
            let tipoEmpleado = document.getElementById("tipoEmpleado").value;
            
            // Get form fields
            let conserje = document.getElementById("conserje");
            let tecnico = document.getElementById("tecnico");
            let profesor = document.getElementById("profesor");
            
            // Enmascarar los campos
            conserje.classList.add("hidden");
            tecnico.classList.add("hidden");
            profesor.classList.add("hidden");

            // Establecer null 
            document.getElementById("categoria").value = "";
            document.getElementById("meses").value = "";
            document.getElementById("departamento").value = "";
            document.getElementById("trienios").value = "";

            // Revelar los campos por selección
            if (tipoEmpleado === "conserje") {
                conserje.classList.remove("hidden");
            } else if (tipoEmpleado === "tecnico") {
                tecnico.classList.remove("hidden");
            } else if (tipoEmpleado === "profesor") {
                profesor.classList.remove("hidden");
            }
        }
    </script>
</body>

</html>
