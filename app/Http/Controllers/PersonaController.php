<?php

namespace App\http\Controllers;

use App\classes\Validator;
use App\models\Persona;
use App\models\Propiedad;
use App\services\PersonaService;
use Exception;

class PersonaController
{

    private PersonaService $service;
    private Validator $validator;

    public function __construct()
    {
        //$this->validator; validar persona
        $this->service = new PersonaService();
    }

    /**
     * @throws Exception
     */
    public function index(): void
    {


        $propiedades = $this->service->index($data);


        // Include the view and pass the properties
        include views('register-form.index');
    }





    /**
     * Mostrar una casa concreta
     *
     * @throws Exception
     */
    public function show(): void
    {


        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = (int) $_GET['id'];



            $usuario = new Persona();
            $usuario->findById($id);

            if ($usuario) {

                include(views('admin.persona.show'));
            } else {
                echo "Propiedad no encontrada";
            }
        } else {

            echo "Id invalido";
        }
    }




    public function edit(array $data): void
    {
        try {
            // Check if 'id' is provided and is valid
            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                throw new Exception('Invalid property ID.');
            }

            $id = (int) $_GET['id'];


            $propiedad = new Propiedad();
            $propiedad->findById($id);
            //var_dump($propiedad);

            if (!$propiedad) {
                throw new Exception('Propiedad no encontrada');
            }

            // Pass the property data to the view for editing
            include(views('admin.casas.edit'));

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }



    public function store(array $data): void
    {
        try {
            //var_dump($data);
            //var_dump($_POST);


            // Validate and sanitize the 'id' passed in $data

            if (!isset($_POST['id'])) {
                throw new Exception('Invalid property ID.');
            }

            // Castear id del POST. $data no me deja y es null
            $id =  $_POST['id'];
            //var_dump($id);
            // Retrieve the property to update
            $propiedad = new Propiedad();
            $propiedad->findById($id);
            var_dump($propiedad);

            if (!$propiedad) {
                throw new Exception('Propiedad no encontrada.');
            }

            // Limpiar entradas
            $titulo = isset($_POST['titulo']) ? htmlspecialchars(trim($_POST['titulo'])) : '';
            $descripcion = isset($_POST['descripcion']) ? htmlspecialchars(trim($_POST['descripcion'])) : '';
            $precio = isset($_POST['precio']) ? (float) $_POST['precio'] : 0.0;



            $id_tipos = $_POST['id_tipos'];
            $usuario_agente = $_POST['usuario_agente'];

            // Update the property with new data
            $propiedad->titulo = $titulo;
            $propiedad->descripcion = $descripcion;
            $propiedad->precio = $precio;
            $propiedad->id_tipos = $id_tipos;  // Set id_tipos to 1
            $propiedad->usuario_agente = $usuario_agente;  // Set usuario_agente to 1

            //Actualizar la propiedad
            if ($propiedad->save()) {
                // Redireccionar si éxito
                header('Location: /admin/casas/index');
                exit;
            } else {
                throw new Exception('No ha sido posible actualizar la propiedad.');
            }

        } catch (Exception $e) {
            // Handle the exception by logging or displaying an error message
            echo "Error: " . $e->getMessage();
        }
    }





    public function delete(): void
    {
        //var_dump($_POST['id']);
        try {
            if (empty($_POST['id']) || !is_numeric($_POST['id'])) {
                throw new Exception('Invalid property ID.');
            }

            $id = (int) $_POST['id'];

            $propiedad = new Propiedad();
            if ($propiedad->destroy($id)) {
                //Mostrar el mensaje de éxito. Tercer trimestre ya que no tengo ningúna vista para eso y estoy casí seguro que es funcionalidad en JavaScript
                // views('/admin/casas/exitonose');
                header('Location: /admin/casas/index');

            } else {
                throw new Exception("Property with ID {$id} not found.");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }


    }

    //
    //
    //

    /**
     * @throws Exception
     */
    public function loginIndex(): void
    {
        include views('login-form.index');
    }




    /**
     * Registrar un usuario
     */
    public function create(array $params = []): void
    {
        try {
            //Faltaría validarlo
            $data = $_POST;


            $persona = $this->service->create(['POST' => $data]);

            if ($persona) {
                // Redireccionar tras el éxito
                header("Location: /");
                exit;
            }
        } catch (Exception $e) {
            echo 'Error al crear usuario: ' . $e->getMessage();
        }
    }







}
