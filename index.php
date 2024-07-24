<?php

// print_r($_SERVER); // to view all
$path = $_SERVER["REQUEST_URI"];
exit($path);

$action = $_GET["action"];
$controller = $_GET["controller"];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();