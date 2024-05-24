<?php

namespace App\Http\Controllers\Api;

trait JsonResponseTrait
{
    protected function httpNotFound()
    {
        return 404;
    }

    protected function httpCreated()
    {
        return 201;
    }

    protected function httpNocontent()
    {
        return 204;
    }
    protected function jsonResponse($message, $statusCode)
    {
        return response()->json(['message' => $message], $statusCode);
    }
}
