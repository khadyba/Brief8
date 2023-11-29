<?php

namespace App\Http\Middleware;
use App\Models\User;
use App\Models\Association;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAssociation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

// dd(Auth::user());
        // Vérification du rôle pour les utilisateurs
        if ($user && $user instanceof User && $user->Role == 'user') {
            return redirect()->route('user.edit');
        }

        // Vérification du rôle pour les associations
        if ($user && $user->Role !== 'associations') {
            return redirect()->route('associations.index');
        }

        return $next($request);
    }
}






