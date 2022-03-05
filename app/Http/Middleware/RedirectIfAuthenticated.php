<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
       // dd($guards);
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if($guard == 'web'){
                return redirect(RouteServiceProvider::HOME);

                }elseif($guard == 'service-provider'){

                return redirect(RouteServiceProvider::PROVIDER);
                }
                elseif($guard == 'admin'){

                return redirect(RouteServiceProvider::ADMIN);
                }
                elseif($guard == 'super-admin'){

                return redirect(RouteServiceProvider::SUPER);
                }
                else{

                }

            }
        }

        return $next($request);
    }
}
