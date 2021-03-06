<?php

namespace App\Http\Middleware;

use Closure;

class checkApiRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        # 如果请求不是通过ajax异步且不是post请求的情况下是非法请求
        if (!$request->ajax() && !($request->method() == 'POST')) {
            
            return response()->json(['msg' => '非法请求~']);
        }
        
        return $next($request);
    }
}
