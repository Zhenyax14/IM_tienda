<?php

namespace App\Http\Controllers;

use App\classes\Validator;
use App\Services\CasaService;
use App\Services\HomeService;
use App\Services\NotFoundService;
use Exception;

class HomeController
{

    private NotFoundService $NotFoundService;
    private CasaService $CasaService;
    private Validator $validator;

    public function __construct()
    {
        $this->NotFoundService = new NotFoundService();
        $this->CasaService = new CasaService();
    }

    /**
     * Mostrar la página principal
     *
     * @throws Exception
     */
    public function index(): void
    {
        $data = [
            'orderBy' => $_GET['orderBy'] ?? 'fecha_mod',
            'direction' => $_GET['direction'] ?? 'DESC'
        ];
        $propiedades = $this->CasaService->index($data);
        include(views('index'));



    }

}
