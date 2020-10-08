<?php

namespace App\Http\Middleware;

use Closure;

class LoginCheck
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
        if ($request->get('id') != 1){
            return redirect('login');
        }
        return $next($request);
    }

    //可以在$ return $next($request); 执行后再执行以下方法
    public function terminate($request , $response){

        echo '<br>http响应后调用的我哦';
    }
}
