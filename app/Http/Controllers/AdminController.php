<?php

namespace App\http\Controllers;

use App\classes\Validator;
use App\Services\CasaService;
use App\Services\HomeService;
use App\Services\NotFoundService;
use App\Services\PersonaService;
use Exception;

class AdminController
{


    private CasaService $CasaService;
    private PersonaService $PersonaService;


    /**
     * Mostrar la página principal
     *
     * @throws Exception
     */

    public function index(): void
    {
        include(views('admin.dashboard'));

    }
    public function CasaIndex(): void
    {

        $this->CasaService = new CasaService();
        $data = [
            'orderBy' => $_GET['orderBy'] ?? 'precio',
            'direction' => $_GET['direction'] ?? 'ASC',
            'search' => $_GET['search'] ?? ''
        ];
        $propiedades = $this->CasaService->index($data);
        include(views('admin.casas.index'));

    }


    /**
     * @throws Exception
     */
    public function UserIndex(): void
    {

        $this->PersonaService = new PersonaService();
        $usuarios = $this->PersonaService->index();

        include(views('admin.usuarios.index'));

    }

}
