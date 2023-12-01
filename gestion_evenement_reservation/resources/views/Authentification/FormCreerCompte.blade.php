@extends('AllUsers.ReservationEvenement.nav')

@section('content')



<div class="container">
<form  action="{{route('user.store')}}"  method="post">
    @csrf
    <fieldset>
      <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Inscrivez-vous!</font></font></legend>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">prenom</font></font></label>
        <input type="text" class="form-control" name="prenom"  placeholder="votre prenom" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nom</font></font></label>
        <input type="text" class="form-control" name="nom"  placeholder="nom de famille" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></label>
        <input type="email" class="form-control" name="email" placeholder="votre adress email" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Numéro de téléphone</font></font></label>
        <input type="text" class="form-control" name="telephone"  placeholder="mettez votre numero" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mot de passe</font></font></label>
        <input type="password" class="form-control" name="password"  placeholder=" Saissisez un Mot de passe" autocomplete="off">
      </div>

      <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Type de Compte</font></font></label>
        <select class="form-select" id="exampleSelect1" name="Role">
          <option  value="user"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Utilisateurs</font></font></option>
           <option value="associations"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Associations</font></font></option>
         
        </select>
      </div>
     
    </fieldset>
    <button type="submit" class="btn btn-primary  mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'inscrire</font></font></button>

      
  </form>
  
   
 
</div>



















@endsection