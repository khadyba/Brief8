<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CkeckConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
    
        // Vérification de la présence de l'utilisateur connecté et de son rôle
        if ($user && $user->Role === 'user') {
            return $next($request);
        }
    
        return redirect()->route('user.create');
    }
    
}
