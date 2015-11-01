<?php
require_once("../vendor/autoload.php");
require_once("requires.php"); //this will be modified adding a custom autoloader

use \App\Lib\MaltaParkParser;

$api = new \Slim\Slim();

$api->response->headers->set('Content-Type', 'application/json');

// Sections routes
$api->get('/sections', function () {
    $stuff = MaltaParkParser::getSectionsFromNet();
    echo json_encode($stuff);
});
$api->get('/sections/:sectionId/items',function($sectionId){
    echo json_encode([]);
});

// Items routes
$api->get('/items/:itemId',function($itemId){
    echo json_encode([]);
});

$api->run();