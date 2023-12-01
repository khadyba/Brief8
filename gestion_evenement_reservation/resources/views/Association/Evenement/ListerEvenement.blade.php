@extends('Association.Evenement.nav')

@section('content')














<div class="container mt-5 " >
    <div class="row">
                @foreach($evenements as $evenement)
                
                        <div class="col-5">
                            <div class="card mb-2 mt-4">
                                <h3 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  {{$evenement->nomEvenement}}</font></font></h3>
                              
                                <img src="{{ asset('storage/'.$evenement->image) }}" class="d-block user-select-none" width="100%" height="300" aria-label="Espace réservé&nbsp;:&nbsp;Capuchon de l'image" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                  <rect width="100%" height="100%" fill="#868e96"></rect>
                                  <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
                                
                                <div class="card-body">
                                  <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evenement->description}}</font></font></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Date de L'événement :{{$evenement->date_evenement}}</font></font></li>
                                </ul>
                               
                                <div class="card-body">
                                  <a href="{{route('associations.edit', $evenement->id)}}"  value="{{$evenement->id}}" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier</font></font></a>
                                  <a href="{{route('associations.destroy', $evenement->id)}}" class="btn btn-danger">Supprimer</a>
                                </div>
   
            </div>
    </div>
    @endforeach
</div>
</div>
@endsection