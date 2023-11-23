<?php

namespace Controller;

include "Controller/AbstractController.php";

class Controller extends AbstractController {
    var $ControllerName;
    var $HTTPMethod;

    public function getControllerAttribute($function) {
        return [
            "Controller Name" => $this->ControllerName,
            "Function Name" => $function,
            "HTTP Method" => $this->HTTPMethod
        ];
    }
}