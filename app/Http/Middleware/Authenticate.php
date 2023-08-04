<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
    
        if(!$request->expectsJson()) {
            throw new HttpException(401, "Unauthorized access");
        }

        return $request->expectsJson() ? null : route('login');
    }
}
