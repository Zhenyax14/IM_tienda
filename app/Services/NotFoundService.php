<?php

namespace App\Services;
use App\models\Propiedad;
use Exception;

class NotFoundService
{
    /**
     * Метод сервиса для получения комментариев
     *
     * @param array $data
     * @return array
     */
    public function NotFound(array $data): array
    {
        include __DIR__ . '/../../views/index.php'; //Mostrar página 404
    }

    /**
     * Метод сервиса для создания комментария
     *
     * @throws Exception
     */

}