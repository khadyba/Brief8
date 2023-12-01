<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
  <title>Document</title>
</head>

<body>



  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('associations.index')}}">Liste Des Evenement</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/associations/Formevenement/create">Ajouter Evenements

            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('users.home')}}">Vue Clients</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('associations.show')}}">Liste Des Reservations </a>
          </li>
        </ul>

       
      
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

     <div class="d-flex justify-content-end w-100 gap-2 container mt-5">
    <a class="btn btn-primary" style="font-size: 10px;padding: 5px ;" href="{{route('user.deconnexionAsso')}}">deconnexion</a>
    <a class="btn btn-primary" style="font-size: 10px;padding: 5px ;" href="{{route('associations.formAssociation')}}">Completer votre profil</a>

  
  
  </div> 
  @yield('content')


</body>

</html>