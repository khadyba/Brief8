
@extends('Association.Evenement.nav')

@section('content')



<div class="container mt-5">
    <div class="row">
                <div class="col-5">
                    <div class="card mb-3">
                        <h3 class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evenement->nomEvenement}}</font></font></h3>
                        <img src="{{ asset('storage/'.$evenement->image) }}" class="d-block user-select-none" width="100%" height="300" aria-label="Espace réservé&nbsp;:&nbsp;Capuchon de l'image" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <div class="card-body">
                          <p class="card-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evenement->description}}</font></font></p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de L'événement :{{$evenement->date_evenement}}</font></font></li>
                        </ul>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date Limite Des Inscription : {{$evenement->date_limite_inscription}} </font></font></li>
                          </ul>

                        <div class="card-body">
                          <a href="{{route('users.create')}}" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reserver</font></font></a>
                        </div>
                       </div>
                  
                  </div>
 
</div>
</div>

@endsection









