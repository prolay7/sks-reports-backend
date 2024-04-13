<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Exception;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $response = [
            'success'   => false,
            'code'      => Response::HTTP_UNAUTHORIZED,
            'data'      => [],
            'message'   => 'Token is Required to access List of call register information',
        ];
        return $request->expectsJson() ? null : response()->json($response);
    }
}
