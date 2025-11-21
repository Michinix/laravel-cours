<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site de voiture</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@if($voitures->isEmpty())
    <p>Aucune voiture disponible.</p>
@else
    <ul>
        @foreach($voitures as $voiture)
            <li>
                <a href="{{ route('voitures.show', $voiture->id)}}">
                    {{ $voiture->plaque_immatriculation }}
                </a>
                <form action="{{ route('voitures.delete', $voiture->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Supprimer cette voiture ?')">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endif
</body>
</html>
