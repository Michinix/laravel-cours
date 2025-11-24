<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification de la voiture</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<form action="{{route('voitures.create')}}" method="POST">
    @csrf
    @method('POST')
    <div>
        <label for="marque">Marque:</label>
        <input type="text" id="marque" name="marque" value="{{ $voiture->marque }}" required>
    </div>
    <div>
        <label for="modele">Modèle:</label>
        <input type="text" id="modele" name="modele" value="{{ $voiture->modele }}" required>
    </div>
    <div>
        <label for="plaque_immatriculation">Plaque d'immatriculation:</label>
        <input type="text" id="plaque_immatriculation" name="plaque_immatriculation" value="{{ $voiture->plaque_immatriculation }}" required>
    </div>
    <div>
        <label for="kilometrage">Kilométrage:</label>
        <input type="number" id="kilometrage" name="kilometrage" value="{{ $voiture->kilometrage }}" required>
    </div>
    <button type="submit">Mettre à jour la voiture</button>
</form>
</body>
</html>
