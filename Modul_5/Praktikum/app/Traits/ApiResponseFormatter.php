<?php

namespace app\Traits;

//Untuk formatting response
trait ApiResponseFormatter
{
    public function ApiResponse($code = 200, $message = "Success", $data = [])
    {
        //Dari Parameter akan diformat seperti dibawah
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ]);
    }
}