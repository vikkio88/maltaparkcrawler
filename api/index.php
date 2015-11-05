<?php
require_once("../vendor/autoload.php");
require_once("requires.php"); //this will be modified adding a custom autoloader

use \App\Lib\MaltaParkParser;

$api = new \Slim\Slim();


$api->response->headers->set('Content-Type', 'application/json');

$api->get('/ping', function () {
    echo json_encode(
        [
            "status" => "service up",
            "message" => "in a bottle",
            "suca" => true
        ]
    );
});

// Sections routes
$api->get('/sections', function () {
    echo json_encode(
        MaltaParkParser::getSectionsFromNet()
    );
});
$api->get('/sections/:sectionId/items',function($sectionId){
    $api = \Slim\Slim::getInstance();
    $pageNum = $api->request->get('p',1);
    echo json_encode(
        MaltaParkParser::getItemListForSectionFromNet($sectionId,$pageNum)
    );
});

// Items routes
$api->get('/items/:itemId',function($itemId){
    echo json_encode(
        MaltaParkParser::getItemDetailFromNet($itemId)
    );
});

$api->run();