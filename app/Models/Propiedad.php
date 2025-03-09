<?php

namespace App\models;

class Propiedad extends Model
{
    protected string $table = 'propiedades';
    protected $fillable = [
        'codigo_propiedad',
        'titulo',
        'metros',
        'precio',
        'descripcion',
        'fecha_creacion',
        'fecha_mod',
        'id_tipos',
        'usuario_agente'
    ];




}