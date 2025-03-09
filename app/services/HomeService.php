<?php

namespace App\services;

use App\models\Comment;
use App\models\Propiedad;
use Exception;

class HomeService
{
    /**
     * Метод сервиса для получения комментариев
     *
     * @param array $data
     * @throws Exception
     */
    public function index(array $data): void
    {
        include(views('index'));
    }
}