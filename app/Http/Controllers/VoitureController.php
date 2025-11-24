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

    public function show($id): View {
        $voiture = Voiture::findOrFail($id);
        return view('voitures.show', compact('voiture'));
    }

    public function delete($id) {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();
        return redirect()->route('voiture.index')->with('success', 'Voiture supprimée avec succès.');
    }

    public function edit($id) {
        $voiture = Voiture::findOrFail($id);
        return view('voitures.edit', compact('voiture'));
    }

    public function update(Request $request, $id) {
        $voiture = Voiture::findOrFail($id);
        $voiture->update($request->only(['marque', 'modele', 'plaque_immatriculation', 'kilometrage']));
        return redirect()->route('voitures.show', $voiture->id)->with('success', 'Voiture mise à jour avec succès.');
    }

    public function create() {
        return view('voitures.create');
    }

    public function store(Request $request) {
        $request->validate([
            'modele' => 'required|string',
            'marque' => 'required|string',
            'plaque_immatriculation' => 'required|unique:voitures|string',
            'kilometrage' => 'required|double'
        ]);

        Voiture::create($request->only(['marque', 'modele', 'plaque_immatriculation', 'kilometrage']));
        return redirect()->route('voiture.index')->with('success', 'Voiture ajoutée avec succès.');
    }
}
