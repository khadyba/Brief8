@extends('AllUsers.ReservationEvenement.nav')

@section('content')



<div class="container">
<form action="{{route('user.connection')}}" method="post">
    @csrf
    <fieldset>
     
    <fieldset>
      <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connectez-vous</font></font></legend>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></label>
        <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="votre adress email" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder=" Saissisez un Mot de passe" autocomplete="off">
      </div>
    </fieldset>
    <button type="submit" class="btn btn-primary  mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se Connecter</font></font></button>

       <a href="{{route('user.form')}}" class="badge bg-info mt-5 " >Creer un Compte</a>
  </form>
  
   
 
</div>



















@endsection