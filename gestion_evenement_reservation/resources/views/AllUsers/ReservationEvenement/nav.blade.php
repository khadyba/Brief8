<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
  <title>@yield('title')</title>
</head>

<body>
    


    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('users.acceuil')}}">DigitalTech Alliance</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('users.home')}}">Liste de Nos Evenements
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
             
            
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="search" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <div class="d-flex justify-content-end w-100 gap-2 container mt-2">
        <a class="btn btn-primary" style="font-size: 10px;padding: 5px ;" href="{{route('user.create')}}">Se Connecter</a>
    
        <a class="btn btn-primary" style="font-size: 10px;padding: 5px ;" href="{{route('user.deconnexion')}}">Se Deconnecter</a>
      </div> 

@yield('content')
 


</body>

</html>