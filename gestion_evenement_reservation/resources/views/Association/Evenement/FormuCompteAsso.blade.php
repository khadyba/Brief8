@extends('Association.Evenement.nav')

@section('content')



<div class="container">
<form action="{{route('associations.formInsert')}}" method="post">
    @csrf
    <input type="hidden" name="iduser" value="{{Auth::user()->id}}">
    <fieldset>
     
    <fieldset>
      <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Completer votre Profile</font></font></legend>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de L'associations</font></font></label>
        <input type="text" class="form-control" name="nomAssociation"   autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleTextarea" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Slogan</font></font></label>
        <textarea class="form-control" name="slogan" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="image" class="form-label mt-4">Votre logo</label>
        <input class="form-control" type="file" id="formFile" name="logo">
    </div>
    <div class="form-group">
      <label for="date" class="form-label mt-4">Date de Creation</label>
      <input class="form-control" type="date" id="formFile" name="date_creation">
  </div>
    </fieldset>
    <button type="submit" class="btn btn-primary  mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'enregistrer</font></font></button>
  </form>
  

 
</div>



















@endsection