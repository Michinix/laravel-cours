<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Voiture;

class VoitureController extends Controller
{
    public function afficherVoiture(): View {
        return view('voitures.afficherVoiture');
    }

    public function index(): View {
        $voitures = Voiture::all();
        return view('voitures.index', compact('voitures'));
    }

    public function show(int $id): View {
        $voiture = Voiture::findOrFail($id);
        return view('voitures.show', compact('voiture'));
    }

    public function delete(int $id) {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();
        return redirect()->route('voiture.index')->with('success', 'Voiture supprimée avec succès.');
    }
}
