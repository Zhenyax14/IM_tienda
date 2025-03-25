<?php


namespace App\http\Controllers;

use App\classes\Validator;
use App\Services\CasaService;
use App\Services\HomeService;
use Exception;

class NotFoundController
{

    /**
     * Mostrar la página de 404
     *
     * @throws Exception
     */
    public function NotFound(): void
    {
        include views('notFound.notFound');


    }
}