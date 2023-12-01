<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ici on va vers la liste des evenements
        return view('Association.Evenement.ListerEvenement',['evenements'=>Evenement::where('is_deleted',0)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ici on se redirige ver le formulaire pour ajouter un evenement
        return view('Association.Evenement.FormAjouterEvenement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  ici les validation pour la creation de l'evenement
        $validata=$request->validate([
            'nomEvenement' => 'required|max:20',
            'description' =>'required',
            'status' =>'required',
            'image' =>'required',
            'date_limite_inscription' =>'required',
            'date_evenement' =>'required',
            // 'association_id' =>'required',
        ]);

        $image=$request->file('image');
        if ($image !== null && !$image->getError()) {
            $validata['image'] = $image->store('image', 'public');
        }
    
        $validata['association_id']=auth()->user()->id;
        $evenement = new Evenement($validata);
        if ($evenement->save()) {
           
            // return view('Association.Evenement.ListerEvenement');
            return back()->with('success', 'Vous avez reuisie la publications');
        }
        


       

    }

  
    /**
     * Display the specified resource.
     */
    public function show()
    {
        // ici nous allons afficher la liste des client inscrit a un evenement
        return view('Association.Evenement.ListerUtilisateurInscrit',['reservations'=>Reservation::all()]);
    }

    public function formAssociation()
    {
        return view('Association.Evenement.FormuCompteAsso');
    }

    public function formInsert(Request $request)
    {
        // Validation des données pour l'association
        $validatedData = $request->validate([
            'nomAssociation' => 'required',
            'slogan' => 'required',
            'logo' => 'required',
            'date_creation' => 'required',

        ]);
        $user=User::find($request->iduser);
        $association = new Association($validatedData);
        $user->profile_completed=1;
        $user->update() ;
        if ($association->save()) {
            // ici on se redirige vers la liste des evenements
            return view('Association.Evenement.ListerEvenement');
        }
    }
    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement,$id)
    {
        $evenement=Evenement::find($id);
        return view('Association.Evenement.FormModifierEvenement',compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ici pour les modifications d'un evenement
 
    $validata=$request->validate([
    'nomEvenement' => 'required|max:20',
    'description' =>'required',
    'status' =>'required',
    'image' =>'required',
    'date_limite_inscription' =>'required',
    'date_evenement' =>'required',
    
    ]);
       $evenement=Evenement::findOrFail($id);
       $image=$request->file('image');
       
       if ($image !== null && !$image->getError()) {
           $validata['image'] = $image->store('image', 'public');
       }
       $evenement->update($validata);
      
       return redirect()->route('associations.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        // ici la fonction pour supprimer un evenement
        $evenement = Evenement::findOrFail($id); 
        $evenement->is_deleted = true; 
        $evenement->update(); 
        return back()->with('success', 'Evenement supprimer avec success!');
    }
}
