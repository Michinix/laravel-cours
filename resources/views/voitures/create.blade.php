<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout de la voiture</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@if($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('voitures.store')}}" method="POST">
    @csrf
    <div>
        <label for="marque">Marque:</label>
        <input type="text" id="marque" name="marque" value="{{ old('plaque_immatriculation') }}" required>
    </div>
    <div>
        <label for="modele">Modèle:</label>
        <input type="text" id="modele" name="modele" value="{{ old('modele') }}" required>
    </div>
    <div>
        <label for="plaque_immatriculation">Plaque d'immatriculation:</label>
        <input type="text" id="plaque_immatriculation" name="plaque_immatriculation"
               value="{{ old('plaque_immatriculation') }}" required>
    </div>
    <div>
        <label for="kilometrage">Kilométrage:</label>
        <input type="number" id="kilometrage" name="kilometrage" value="{{ old('kilometrage') }}" required>
    </div>
    <button type="submit">Ajouter la voiture</button>
    <a href="{{route('voitures.index')}}">Retour</a>
</form>
</body>
</html>
