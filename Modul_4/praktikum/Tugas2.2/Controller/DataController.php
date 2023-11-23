<?php

namespace Controller;

// include "Controller/AbstractController.php";
include "Controller/Controller.php";
// include "Traits/ResponseFormatter.php";

use Traits\responseFormatter;

class DataController extends Controller
{
    use responseFormatter;
    public function __construct()
    {
        $this->controllerName = "Data Kebutuhan Pokok";
    }

    public function dataList()
    {
        $devices = [
            ["name" => "Nipis Madu", "Harga" => 3800],
            ["name" => "Indomie", "Harga" => 2500],
            ["name" => "Le Minerale", "Harga" => 2000],
            ["name" => "Mr.Bread", "Harga" => 10000],
            ["name" => "Silverqueen", "Harga" => 13500],
            ["name" => "Iphone 15 Pro Max", "Harga"=> 17500000]
        ];
        return $devices;
    }
    public function getAlldata()
    {
        $data = $this->dataList();
        $response = [
            "controller_attribute " => $this->getAttribute("GetAlldata", "GET"),
            "Biodata" => $data
        ];
        return $this->responseFormatter(200, "Success", $response);
    }
}