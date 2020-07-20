<?php

namespace App\Http\Middleware;

use Closure;

class ChequearRol
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
            return redirect()->route('home');        
        }
        if($request->has('submit')){
            $request->user()->confirmarUsuario();
        }
        return $next($request);
    }

}
