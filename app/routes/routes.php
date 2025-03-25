<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CasaController;
use App\Http\Controllers\CestaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\PersonaController;



return [
    'GET' => [
        '/' => [HomeController::class, 'index'],
        
        '/casas/index' => [CasaController::class, 'index'],
        '/casas/show' => [CasaController::class, 'show'],


        '/cesta/index' => [CestaController::class, 'index'],

        ///Parte de admin
            // Formularios de creación, modificación y el borrado de casas;
        '/admin/index' => [AdminController::class, 'index'],
        '/admin/casas/index' => [AdminController::class, 'CasaIndex'],
        '/admin/casas/edit' => [CasaController::class, 'edit'],
        '/admin/casas/create' => [CasaController::class, 'create'],
        '/admin/casas/delete' => [CasaController::class, 'delete'],
    
            //Mostrar, editar y borrar usuarios. Tal vez solo agentes creo.
        '/admin/users/index' => [AdminController::class, 'UserIndex'],
        '/admin/users/edit' => [PersonaController::class, 'edit'],
        '/admin/users/show' => [PersonaController::class, 'show'],
        '/admin/users/delete' => [PersonaController::class, 'edit'],


        //// Registrarse o logearse en la página web
        '/users/index' => [PersonaController::class, 'index'],
            //Este es login para un usuario normal.
        '/users/login/index' => [PersonaController::class, 'loginIndex'],
        

    ],
    'POST' => [
        //Registrar un usuario;
        //'/users/login/create' => [PersonaController::class, 'loginCreate'], TODO finalizar login y sesiones
        '/users/create' => [PersonaController::class, 'create'],

        //PARTE DE ADMIN
        //Crear, modificar, borrar usuarios;

        '/admin/casas/store' => [CasaController::class, 'store'],
        '/admin/casas/destroy' => [CasaController::class, 'delete'],
        //Crear, modificar, borrar usuarios;
        '/admin/users/store' => [PersonaController::class, 'store'],
        '/admin/users/destroy' => [PersonaController::class, 'destroy'],
        '/admin/users/update' => [PersonaController::class, 'update']
    ],
    '404' => [NotFoundController::class, 'notFound'],
];
