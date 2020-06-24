<?php

namespace App\Http\Controllers;

use App\Cagnolino;

class CagnolinoController extends Controller
{
    public function index(){

      $cagnolini = Cagnolino::all();

      // dd($cagnolini);

      return view("home", compact("cagnolini"));

    }

    public function show_cagnolino($id){

      $cagnolini = Cagnolino::findOrFail($id);


      return view("mostra_cagnolino", compact("cagnolini"));
    }
}
