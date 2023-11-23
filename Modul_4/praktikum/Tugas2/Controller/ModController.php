<?php 

namespace Controller;

include "Controller/Controller.php";
include "Models/Mod.php";
include "Traits/ResponseFormatter.php";

use Models\Mod;

use Traits\ResponseFormatter;

class ModController extends Controller {
    use ResponseFormatter;

    
    public function __construct() {
        $this->ControllerName = "ModController";
        $this->HTTPMethod = "GET";
    }
    
    public function getAllMod() {
        $Mod = new Mod;
        $devices = $Mod->deviceList();
        $response = [
            "controller_attribute" => $this->getControllerAttribute("GetAllMod"),
            "data" => $devices
        ];

        return $this->responseFormatter(200, "Success", $response);
    }

    public function getModById($index) {
        $Mod = new Mod;
        $devices = $Mod->deviceList();
        $response = [
            "controller_attribute" => $this->getControllerAttribute("getModById"),
            "data" => null
        ];
        if ($index < count($devices)) {
            $response["data"] = $devices[$index - 1];
            return $this->responseFormatter(200, "Success", $response);
        } else {
            return $this->responseFormatter(400, "Bad Request", $response);
        }
    }
}