<?php

include "Controller/ModController.php";

use Controller\ModController;

$ModController = new ModController;

echo $ModController->getAllMod();
// echo $ModController->getModById(3);