<?php
require __DIR__.'/../..app/auth.php';
auth(); 


require __DIR__.'/../../app/Http/Controllers/CasaController.php';

use App\Controllers\CasaController;

$casaController = new CasaController();
$contenido = $casaController->create(); //Retorna el html de la vista aquí
view('casas/create', compract('contenido'));

?>
