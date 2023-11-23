<?php
include("Controller/DataController.php");

use Controller\DataController;

$DataController = new DataController();
echo $DataController->getAlldata();