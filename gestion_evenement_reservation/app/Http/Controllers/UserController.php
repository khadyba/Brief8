<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ici on va lister les evenement pour tout les utilisateurs
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Authentification.FormConnection');
    }

    /**
     * Store a newly created resource in storage.
     */
    













public function store(Request $request)
{
    // Validation pour la création de compte
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'telephone' => 'required|max:9',
        'password' => 'required|min:6',
        'Role'=> 'required'
        
    ]);
    // dd($validatedData['Role']);
    // Création d'une nouvelle instance d'utilisateur

    $user = new User($validatedData);
    // dd($validatedData['Role']);
    // On vérifie si le type de compte choisi est user
    if ($validatedData['Role'] === 'user') {
        // On enregistre l'utilisateur comme un utilisateur normal, puis le redirige vers la page de connexion
    if ($user->save()) {
        return redirect()->route('user.create')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
    }
} elseif($validatedData['Role'] === 'associations') {

    if ($user->save()) {
        return view('Authentification.FormConnection');
    }


}

}
    
  
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function form()
    {
     return view('Authentification.FormCreerCompte');
    }

    public function connection(Request $request){
       
        
        
        
        // Vérifie si la connexion a réussi
        if ( Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password
        ])) {
            // Récupère le rôle de l'utilisateur connecté
            $user = User::where('email', $request->email)->value('Role');
            // dd($user);
            // Vérifie le rôle pour décider de la redirection
            if( $user === "associations" ){
                // Redirection vers la vue des associations
                return redirect()->route('associations.index');
            } else {
                // Redirection vers la vue pour les utilisateurs simples
                return view('AllUsers.Acceuil');
            }
        }
        
        // En cas d'échec de la connexion, retour à la page de connexion avec un message d'erreur
        return back();
        
        


        
    }




    public function deconnexion(){
        // ici les validation pour la deconnection
        if(Auth::logout() === null){
            return redirect()->route('users.acceuil'); 
        }else{
            return back()->with('success', 'comment tu es arrivé là, voleur sans te connecter');
        }
        
    }
public function deconnexionAsso()
{
    if(Auth::logout() === null){
        return redirect()->route('user.create'); 
    }else{
        return back()->with('success', 'comment tu es arrivé là, voleur sans te connecter');
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ici la vérification de la conection
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}




