<?php
//error_reporting(E_ALL & ~E_WARNING); // This will suppress warnings but still show other types of errors.

use App\providers\AppProvider;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../configs/app.php';
require __DIR__ . '/../helpers/helper.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Accept: text/html");
header("Content-Type: text/html; charset=UTF-8");

/**
 * Точка входа в приложение
 */
try {
    $obj = new AppProvider();
    echo $obj->run();
} catch (Exception $e) {
    echo $e->getMessage();
    return;
}