<?php
require_once("../vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    require("app.html");
});

$app->run();