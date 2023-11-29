<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ici on va vers la liste des evenements
        return view('Association.Evenement.ListerEvenement');
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
            'nomEvenement' =>'required',
            'description' =>'required',
            'status' =>'required',
            'image' =>'required',
            'date_limite_inscription' =>'required',
            'date_evenement' =>'required',
            'association_id' =>'required',
        ]);

        $image=$request->file('image');
        if ($image !== null && !$image->getError()) {
            $validata['image'] = $image->store('image', 'public');
        }
             $evenement= new Evenement($validata);
             if ($evenement->save()) {
                // ici on se redirige vers la liste des evenements
        return view('Association.Evenement.ListerEvenement');
             }


       

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ici nous allons afficher la liste des client inscrit a un evenement
        return view('Association.Evenement.ListerUtilisateurInscrit');
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
    public function edit(string $id)
    {
        return view('Association.Evenement.FormModifierEvenement');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ici pour les modifications d'un evenement
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
