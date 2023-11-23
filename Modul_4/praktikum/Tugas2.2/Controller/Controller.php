<?php

namespace Controller;

include "Controller/AbstractController.php";
include "Traits/responseFormatter.php";

class Controller extends AbstractController
{

    var $controllerName;
    var $controllerMethod;
    var $HTTPMenthod;


    public function getAttribute($controllerMethod, $HTTPMenthod)
    {
        return [
            "Controller" => $this->controllerName,
            "Function Name" => $controllerMethod,
            "Http Method" => $HTTPMenthod,
        ];
    }
}