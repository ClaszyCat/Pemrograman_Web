<?php

namespace Controller;

abstract class AbstractController {
    var $ControllerName;
    var $HTTPMethod;
    abstract public function getControllerAttribute($function);
}