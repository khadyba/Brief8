@extends('Association.Evenement.nav')

@section('content')



@if (session('success'))
<div class="alert alert-success">
      {{session('success')}}
    </div>
      @endif

<div class="container">
    <div style="text-align: center;">
        <h1>Liste des Réservations Effectuées</h1>
      </div>
<table class="table table-success table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Evenement</th>
      <th scope="col">Reference </th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($reservations as $reservation)
      <tr>
        <td>{{ $reservation->user->nom }}</td>
        <td>{{ $reservation->user->prenom }}</td>
        <td>{{ $reservation->evenement->nomEvenement }}</td>
        <td>{{ $reservation->references}}</td>
        <td>{{ $reservation->created_at}}</td>
        <td>
          @if($reservation->etat=='ou_pas')
          
          <p>Dejat Décliner</p> 
          @else
          <td><a href="{{route('associations.update_ass',$reservation->id)}}" class="btn btn-danger">Décliner</a></td>

          @endif
        </td> 
      </tr>
    @endforeach
  </tbody>
</table>


 
</div>

@endsection