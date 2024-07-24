<?php

require "src/controllers/products.php";

$controller = new Products;

$action = $_GET["action"];

if ($action === "index") {

    $controller->index();
} elseif ($action === "show") {

    $controller->show();
}


// route/index.php?action=index
// route/index.php?action=show
