<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChekProfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (/Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        // dd($user->profile_completed);
    
        // Vérification si l'utilisateur est connecté et de type "association"
        if ($user && $user->Role === 'associations') {
            // Vérification si le profil de l'association est complet
            if (!$user->profile_completed) {
                // Redirection vers le formulaire de complétion du profil pour les associations
                return redirect('/associations/FormAssociation');
            }else{
                return $next($request);
            }
            
        }else{
            dd('ok');
        }
    
       
    }
    
    
    
}
