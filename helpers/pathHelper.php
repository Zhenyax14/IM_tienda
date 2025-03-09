<?php

function routes(): string
{
    return BASE_PATH . '/app/routes/routes.php';
}

/**
 * @throws Exception
 */

function views(string $nameTpl): string
{
    // Convert dot notation to directory path
    $tplAddress = str_replace('.', '/', $nameTpl);

    // Construct the full path to the view file
    $fileName = BASE_PATH . "/app/views/{$tplAddress}.php";


    // Ensure the view file exists, otherwise show the notFound page
    if (!file_exists($fileName)) {
        $fileName =  "/app/views/notFound/notFound.php";
        error_log("View not found: {$fileName}");
    }


    return $fileName;
}


function links(string $nameCss): string
{
    // Replace dots with slashes for path structure
    $cssAddress = preg_replace('/\./', "/", $nameCss);

    // Return the URL path, not the filesystem path
    return '/public/css/' . $cssAddress . '.css';
}

function media(string $nameMedia): string
{

    // Return the URL path, not the filesystem path
    return './public/img/' . $nameMedia;
}

