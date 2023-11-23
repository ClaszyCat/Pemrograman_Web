<?php

namespace Controller;

class Controller{
    //Variable Atribut
    var $controllerName;
    var $controIIerMethod;

public function getControllerAttribute()
  {

    return [
        "ControllerName" => $this -> controllerName,
        "Method" => $this -> controllerMethod
    ];
  } 
}