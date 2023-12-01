@extends('Association.Evenement.nav')

@section('content')






<div class="container mt-5">
  <div class="alert alert-success">
    @if (session('success'))
    {{session('success')}}
    @endif
  </div>
<div class="container">
    <form  action="{{route('associations.store')}}"  method="post"  enctype="multipart/form-data">
        @csrf 
        <fieldset>
          <legend><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Créer un Evénment</font></font></legend>
    
          <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nom de L'événement</font></font></label>
            <input type="text" class="form-control" name="nomEvenement"   autocomplete="off">
          </div>
    
          <div class="form-group">
           
           <textarea name="description"id=""  class="form-control mt-4" cols="20" rows="5">Descriptions</textarea>
          </div>
    
          <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etat</font></font></label>
            <select class="form-select" id="exampleSelect1" name="status">
              <option  value="cloturer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cloturer</font></font></option>
               <option value="ou_pas_cloturer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ouvert</font></font></option>
             
            </select>
          </div>
    
          <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Télécharger une Image</font></font></label>
            <input type="file" class="form-control" name="image" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="date" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date Limite Des Inscription</font></font></label>
            <input type="date" class="form-control" name="date_limite_inscription"   autocomplete="off">
          </div>
    
          <div class="form-group">
            <label for="date" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date De L'événement</font></font></label>
            <input type="date" class="form-select"  name="date_evenement">
          </div>
       
        
        </fieldset>
        <button type="submit" class="btn btn-primary  mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Publier</font></font></button>
    
          
      </form>
      
       
     
    </div>
    























@endsection