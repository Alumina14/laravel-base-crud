<?php

namespace App\Http\Controllers;
use App\Omini;
use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index(){
      $omini = Omini::all();
      return view('home', compact("omini"));
    }

    // mostra
    public function show($id){
      $omino = Omini::findOrFail($id);
      return view('mostraOmini', compact("omino"));
    }

    // modifica

    public function edit($id){
      $omino = Omini::findOrFail($id);
      return view('modificaOmino', compact("omino"));
    }

    //  aggiorna

    public function update(Request $request, $id){
      $ominoData = $request ->all();
      $omino = Omini::findOrFail($id);

      $omino -> nome = $ominoData['nome'];
      $omino -> cognome = $ominoData['cognome'];
      $omino -> indirizzo = $ominoData['indirizzo'];
      $omino -> cap = $ominoData['cap'];
      $omino -> nazione = $ominoData['nazione'];
      $omino -> telefono = $ominoData['telefono'];
      $omino -> ruolo = $ominoData['ruolo'];

      $omino -> save();

      return redirect() -> route('mostraOmini', $omino['id']);

      }
      // crea omino ritorna un form vuoto

      public function create(){

        return view('creaOmino');
      }

      // store

      public function store(Request $request){
        $ominoData = $request ->all();

        $omino = new Omini;

        $omino -> nome = $ominoData['nome'];
        $omino -> cognome = $ominoData['cognome'];
        $omino -> indirizzo = $ominoData['indirizzo'];
        $omino -> cap = $ominoData['cap'];
        $omino -> nazione = $ominoData['nazione'];
        $omino -> telefono = $ominoData['telefono'];
        $omino -> ruolo = $ominoData['ruolo'];

        $omino -> save();

        return redirect() -> route('home');

    }

    public function destroy($id) {

      $omino = Omini::findOrFail($id);
      $omino -> delete();

      return redirect() -> route('home');

    }
}
