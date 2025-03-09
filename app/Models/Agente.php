<?php

namespace App\models;

class Agente extends Persona
{
    protected string $table = 'agentes';
    private int $usuario = $this->id;
    private int $id_especialidad;
    private float $sueldo;

    


}