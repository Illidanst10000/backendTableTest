<?php

require_once 'Controller.php';
require_once 'Model.php';
require_once 'View.php';

$controller = new Controller();

if (file_exists('example.json')) {
    $fileContent = file_get_contents('example.json');
    $decodeContent = json_decode($fileContent, true);
    $controller->getData($decodeContent);
}

if (isset($argv)) {
    unset($argv[0]);
    $controller->getData($argv);
}

$controller->showTable();