<?php
header("Content-Type : application/json; charset+UTF-8");

include "Routes/ProductRoutes.php";

use app\Routes\ProductRoutes;

//get Request Method
$method = $_SERVER['REQUEST_METHOD'];
//get Request Path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Call Routes
$productRoute = new ProductRoutes();
$productRoute->handle($method, $path);