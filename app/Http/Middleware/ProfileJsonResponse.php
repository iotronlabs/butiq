<?php

namespace App\Http\Middleware;
use Illuminate\Http\JsonResponse;

use Closure;

class ProfileJsonResponse
{
    
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof JsonResponse && app('debugbar')->isEnabled() && $request->has('_debug')) {
            $response->setData($response->getData(true) + [
                '_debugbar' => array_only(app('debugbar')->getData(), 'queries')
             // dd("workd");
                // 'test' => true
              ]);  
        
        }

        return $response;
    }
}
