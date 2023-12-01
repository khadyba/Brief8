@extends('AllUsers.ReservationEvenement.nav')

@section('content')

<div class="container">
    <form  action="{{route('users.edit')}}"  method="post"  enctype="multipart/form-data">
        @csrf 
        <fieldset>
          <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faire Une Reservation</font></font></legend>
    
          <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de  Reservation</font></font></label>
            <input type="text" class="form-control" name="nombre_reservation"   autocomplete="off">
            <input type="hidden" class="form-control" name="evenement_id"   value="{{$id}}">
          </div>

        </fieldset>
        <button type="submit" class="btn btn-primary  mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Effectuer</font></font></button>
      </form>
    </div>
@endsection