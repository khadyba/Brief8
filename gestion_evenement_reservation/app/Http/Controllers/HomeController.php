<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homepage()
    {
        //
        return view('AllUsers.ReservationEvenement.listerEvenement',['evenements'=>Evenement::where('is_deleted',1)->get()]);
    }

 public function acceuil()
    {
        //
        return view('AllUsers.Acceuil');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request )
    {
        $event=Evenement::findOrFail($request->id);
        return view('AllUsers.ReservationEvenement.detailEvenement',['evenement' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
