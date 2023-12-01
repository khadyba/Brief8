<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        return view('AllUsers.ReservationEvenement.FormReservation',compact('id'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
// ici on récupére l'id du user et de l'evenement 
        $userid=Auth::user()->id;
        $evenement=$request->evenement_id;
        // ici nous allons valider les reservation
            $validata= $request->validate(
                [
                 'nombre_reservation'=>'required|max:20',
                ]);
              $validata['user_id']=$userid;
              $validata['evenement_id']=$evenement;
                $reference = Str::random(8);
                 $validata['references']=$reference;
                $reservation = new Reservation($validata);
                $reservation->save();
                return redirect()->route('users.show', $evenement)->with('success', 'votre reservation a été prise en compte');
               
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update_ass(string $id)
    {
        // ici nous allons modifier le statue du reservation 
                    $reservation=Reservation::findOrFail($id);
                    $reservation->etat="ou_pas";
                    $reservation->update();
                    return redirect()->route('associations.show', $reservation->evenement_id)->with('success', 'Vous venez de décliner la reservation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
