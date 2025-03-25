<?php

namespace App\Services;

use App\Models\Persona;

use Exception;

class PersonaService
{

    /**
     * Метод сервиса для получения комментариев
     *
     * @param array $data
     * @throws Exception
     */
    public function index(): array
    {
        $usuarios = Persona::all();


        return array_values($usuarios);
    }

    /**
     * Метод сервиса для создания комментария
     *
     * @throws Exception
     */
    public function create(array $data): ?Persona
    {
        if (!isset($data['POST'])) {
            throw new Exception('Datos no válidos', 422);
        }

        $person = new Persona();
        $person->id = htmlspecialchars($data['POST']['movil']);
        $person->contrasena = password_hash($data['POST']['contrasena'], PASSWORD_BCRYPT);
        $person->nombre = htmlspecialchars($data['POST']['nombre']);
        $person->apellidos = htmlspecialchars($data['POST']['apellidos']);
        $person->email = htmlspecialchars($data['POST']['email']);

        $person->save();

        return $person;
    }



}