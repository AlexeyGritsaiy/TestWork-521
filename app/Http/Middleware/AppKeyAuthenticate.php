<?php

namespace App\Http\Middleware;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class AppKeyAuthenticate
{
    public function handle(Request $request, \Closure $next)
    {
        $key = $request->header('Authorization');

        if ($key === env('KEY')) {
            return $next($request);
        }

        throw new HttpResponseException(response()->json('Please enter valid app key.',401));
    }
}
