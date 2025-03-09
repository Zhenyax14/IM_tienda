<?php

namespace App\http\Controllers;

use App\classes\Validator;
use App\services\CasaService;
use Exception;

class CestaController
{



    /**
     * Mostrar todas las casas
     *
     * @throws Exception
     */
    public function index(): void
    {

        include(views('cart.index'));


    }


    /**
     * Mostrar una casa concreta
     *
     * @throws Exception
     */
    public function show(array $params = []): void
    {
        $params = $this->validator->validated($params);
        include __DIR__ . '/../../views/shop/index.php';
    }
}
