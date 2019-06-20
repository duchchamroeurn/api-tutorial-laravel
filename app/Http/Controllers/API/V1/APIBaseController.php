<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

class APIBaseController extends Controller {
    
    protected function responseSuccess($message, $data = [], $statusCode = 200){
        $result = [
            "success" => true,
            "data" => $data,
            "message" => $message
        ];
        return response()->json($result, $statusCode);
    }
    
    protected function responseFail($message, $statusCode = 404){
        $error = [
            "success" => false,
            "message" => $message
        ];
        return response()->json($error, $statusCode);
    }
}