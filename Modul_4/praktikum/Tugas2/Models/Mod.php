<?php

namespace Models;

class Mod {
    public function deviceList() {
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
}