<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails de voiture</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>{{$voiture->plaque_immatriculation}}</h1>
<div>
    <h2>{{ $voiture->marque }} - {{ $voiture->modele }}</h2>
    <p>Kilométrage: {{ $voiture->kilometrage }}</p>
</div>

<a href="{{url('/voitures')}}">Retour à la liste des voitures</a>
</body>
</html>
