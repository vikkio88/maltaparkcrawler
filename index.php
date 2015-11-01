<?php
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    require("app.html");
});


$app->response->headers->set('Content-Type', 'application/json');
$app->get('/api/sections', function () {

    $stuff = [
        ["bla" =>"one","blabla"=>"two"],
        ["bla" =>"one","blabla"=>"two"],
        ["bla" =>"one","blabla"=>"two"]
    ];
    
    echo json_encode($stuff);
});

$app->run();