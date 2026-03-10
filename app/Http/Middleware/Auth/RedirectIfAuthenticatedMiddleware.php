<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $routes = [
                'bimbel.' . config('app.host') => 'bimbel.dashboard.' . $user->role->value . '.index',
                'pengobatan.' . config('app.host') => 'pengobatan.dashboard.' . $user->role->value . '.index',
            ];
            $host = $request->getHost();
            $route = $routes[$host] ?? 'dashboard.' . $user->role->value . '.index';
            if (!Route::has($route)) {
                abort(403, 'Forbidden');
            }
            return redirect()->route($route);
        }
        return $next($request);
    }
}
