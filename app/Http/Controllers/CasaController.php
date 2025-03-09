<?php

namespace App\http\Controllers;

use App\classes\Validator;
use App\models\Propiedad;
use App\services\CasaService;
use Exception;

class CasaController
{

    private CasaService $service;
    private Validator $validator;

    public function __construct()
    {
         
        $this->service = new CasaService();
    }

   
    /**
     * Mostrar todas las casas
     *
     * @throws Exception
     */
    public function index(): void
    {
        // Capture filter parameters with defaults
        $data = [
            'orderBy' => $_GET['orderBy'] ?? 'fecha_mod',
            'direction' => $_GET['direction'] ?? 'ASC',
            'search' => $_GET['search'] ?? '',
        ];

        $propiedades = $this->service->index($data);


        // Include the view and pass the properties
        include views('shop.index');
    }





    /**
     * Mostrar una casa concreta
     *
     * @throws Exception
     */
    public function show(): void
    {

        $propiedad = $this->service->find();

            if ($propiedad) {

                include(views('shop.item'));
            } else {
                echo "Propiedad no encontrada";
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
            var_dump($data);
            // Retrieve the ID from the form data (if it exists)
            $id = isset($_POST['id']) ? (int) $_POST['id'] : null;

            // Validate form fields
            $titulo = isset($_POST['titulo']) ? htmlspecialchars(trim($_POST['titulo'])) : '';
            $descripcion = isset($_POST['descripcion']) ? htmlspecialchars(trim($_POST['descripcion'])) : '';
            $precio = isset($_POST['precio']) ? (float) $_POST['precio'] : 0.0;
            $metros = isset($_POST['metros']) ? htmlspecialchars(trim($_POST['metros'])) : '';
            $id_tipos = isset($_POST['id_tipos']) ? (int) $_POST['id_tipos'] : 1;
            $usuario_agente = isset($_POST['usuario-agente']) ? (int) $_POST['usuario-agente'] : 1;

            // If the ID is set, find the existing property
            if ($id) {
                $propiedad = new Propiedad();
                $propiedad->findById($id);
                if (!$propiedad) {
                    throw new Exception('Propiedad no encontrada.');
                }
            } else {
                // Create a new Propiedad if no ID is provided
                $propiedad = new Propiedad();
            }


            // Handle image upload if provided
            $imagePath = null;
            if (!empty($_FILES['thumbnail']['name'])) {
                $uploadDir = 'http://127.0.0.1:8000/img/apartments';
                $imageName = basename($_FILES['thumbnail']['name']);
                $targetPath = $_SERVER['DOCUMENT_ROOT'] . $uploadDir . $imageName;

                // Ensure the upload directory exists
                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $uploadDir)) {
                    mkdir($_SERVER['DOCUMENT_ROOT'] . $uploadDir, 0777, true);
                }

                // Move uploaded file
                if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $targetPath)) {
                    $imagePath = $uploadDir . $imageName;
                } else {
                    throw new Exception('Error al subir la imagen.');
                }
            }

            // Set the image path in the property
            $propiedad->thumbnail = $imagePath;
            // Set the property fields
            $propiedad->titulo = $titulo;
            $propiedad->descripcion = $descripcion;
            $propiedad->precio = $precio;
            $propiedad->fecha_mod = date('Y-m-d H:i:s');
            $propiedad->metros = $metros;
            $propiedad->id_tipos = $id_tipos;
            $propiedad->usuario_agente = $usuario_agente;

            //var_dump($_FILES)
            // Save (insert or update) the property
            if ($propiedad->save()) {
                // Redirect if successful
                header('Location: /admin/casas/index');
                exit;
            } else {
                throw new Exception('No ha sido posible guardar la propiedad.');
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

    public function create(): void
    {
        include views('admin.casas.create');


    }


}
