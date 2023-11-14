<?php

namespace Traits;

//trait untuk formatter json response
trait ResponseFormatter
{
    public function responseFormatter($code, $message, $data = null)
    {
        return json_encode([
            "code" => $code,
            "messages" => $message,
            "data" => $data
        ]);
    }
}