@extends('AllUsers.ReservationEvenement.nav')

@section('content')







@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
  </div>
    @endif


<style>
    body {
      background-image: url('https://logos.flamingtext.com/City-Logos/Paradis-Water-Logo.png');
      background-size: cover;
      background-repeat: no-repeat;
    }
  
    h1 {
      color: rgb(21, 21, 21);
      display: flex;
      justify-content: center;
      align-content: center;
      margin-top: 90px;
    }
  
    .grid-container {
      display: grid;
      place-items: center;
      height: 400px;
      /* Ajustez la hauteur selon vos besoins */
      /* border: 1px width: 100px */
    }
  
    .my-button {
      padding: 10px 20px;
      /* Ajustez les valeurs de padding pour changer la taille */
      font-size: 30px;
      /* Ajustez la taille de la police */
    }
  </style>







<h1>RETROUVEZ  ICI LES MEILLEURS EVENEMENTS DE L'ANNER!</h1>













@endsection