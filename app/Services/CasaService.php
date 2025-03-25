<?php

namespace App\Services;

use App\Models\Propiedad;

class CasaService
{
    /**
     * Retrieve and filter Casas based on search and order parameters.
     *
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function index(array $data): array
    {
        $query = (new Propiedad())->select(['*'])->from();

        // Apply search if present and not empty
        if (!empty($data['search'])) {
            $searchTerm = '%' . $data['search'] . '%';
            $query->where('titulo', 'LIKE', $searchTerm);
        }
            // Ensure correct order direction
            $direction = strtoupper($data['direction']) === 'DESC' ? 'DESC' : 'ASC';
            $query->orderBy([$data['orderBy'] => $direction]);

        $result = $query->get();



        return is_array($result) ? $result : [];
    }




public function store(): void
    {
        try {
            // Ensure POST request
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method.');
            }

            // Validate and sanitize input data
            if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
                throw new Exception('Invalid property ID.');
            }

            $id = (int)$_POST['id'];

            // Fetch the property by ID
            $propiedad = $this->service->findById($id);

            if (!$propiedad) {
                throw new Exception('Property not found.');
            }

            // Update property with form data
            $propiedad->titulo = $_POST['titulo'] ?? '';
            $propiedad->metros = $_POST['metros'] ?? '';
            $propiedad->precio = $_POST['precio'] ?? '';
            $propiedad->descripcion = $_POST['descripcion'] ?? '';
            // Other properties can be added here...

            // Save the updated property
            $propiedad->save();

            // Redirect to the property list or a success page
            header('Location: /admin/casas/index');
            exit;

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * @throws \Exception
     */
    public function find(): ?Propiedad
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = (int)$_GET['id'];

            $propiedad = new Propiedad();
            $propiedad->findById($id);
            return $propiedad;

        }
        return null;
    }
}
