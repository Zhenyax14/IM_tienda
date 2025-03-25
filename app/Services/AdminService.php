<?php

namespace App\Services;

use App\models\Propiedad;

class AdminService
{
    public function index(array $data = []): array
    {
        // ✅ Retrieve all records
        $propiedades = Propiedad::all();

        // ✅ Search functionality (Filter after retrieving all)
        if (!empty($data['search'])) {
            $propiedades = array_filter($propiedades, function ($propiedad) use ($data) {
                return stripos($propiedad->titulo, $data['search']) !== false
                    || stripos($propiedad->ciudad, $data['search']) !== false
                    || stripos($propiedad->descripcion, $data['search']) !== false;
            });
        }

        // ✅ Valid columns for sorting
        $validColumns = ['precio', 'titulo', 'ciudad'];
        $orderBy = $data['orderBy'] ?? 'precio';
        $direction = strtolower($data['direction'] ?? 'asc') === 'desc' ? 'desc' : 'asc';

        // ✅ Sort results if valid column is provided
        if (in_array($orderBy, $validColumns, true)) {
            usort($propiedades, function ($a, $b) use ($orderBy, $direction) {
                if ($a->$orderBy == $b->$orderBy) {
                    return 0;
                }

                if ($direction === 'asc') {
                    return $a->$orderBy <=> $b->$orderBy;
                } else {
                    return $b->$orderBy <=> $a->$orderBy;
                }
            });
        }

        return array_values($propiedades);
    }

    public function findById(int $id): ?array
    {
        // Retrieve the result (could be an array of objects)
        $result = Propiedad::find($id);

        // Ensure that $result is an array and handle accordingly
        if (is_array($result)) {
            return $result[0]; // If it's an array, return the first element
        }

        return null;
    }


}
