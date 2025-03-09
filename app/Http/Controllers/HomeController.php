<?php

namespace App\http\Controllers;

use App\classes\Validator;
use App\services\CasaService;
use App\services\HomeService;
use App\services\NotFoundService;
use Exception;

class HomeController
{

    private NotFoundService $service;
    private Validator $validator;

    public function __construct()
    {
        $this->service = new NotFoundService();
    }

    /**
     * Mostrar la página principal
     *
     * @throws Exception
     */
    public function index(): void
    {
        include(views('index'));



    }

}
