<?php

namespace Controller;

class Controller{
    //Variable Atribut
    var $controllerName;
    var $controIIerMethod;
// METHOD UNTUK MENGAMBIL SEMUA ATRIBUT
public function getControllerAttribute()
  {

    return [
        "ControllerName" => $this -> controllerName,
        "Method" => $this -> controllerMethod
    ];
  } 
}