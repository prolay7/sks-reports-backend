<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Exception;
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
<<<<<<< HEAD
        if (! $request->expectsJson()) {
            return route('login');
        }
=======
        $response = [
            'success'   => false,
            'code'      => Response::HTTP_UNAUTHORIZED,
            'data'      => [],
            'message'   => 'Token is Required to access List of call register information',
        ];
        return $request->expectsJson() ? null : response()->json($response);
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8
    }

    // Add new method 
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json(
            [
                    'success'   => false,
                    'code'      => 401,
                    'data'      => [],
                    'message'   => 'UnAuthenticated',
            ], 401));
    }
}