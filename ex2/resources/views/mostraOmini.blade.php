@extends('main_layout')

@section("content")
  <div class="omini">
Nome:  {{$omino["nome"]}} <br>
Cognome:  {{$omino["cognome"]}} <br>
Indirizzo:  {{$omino["indirizzo"]}} <br>
Cap:  {{$omino["cap"]}} <br>
Nazione:  {{$omino["nazione"]}} <br>
Telefono:  {{$omino["telefono"]}} <br>
Ruolo: {{$omino["ruolo"]}} <br>
<a href="{{route('modificaOmino',$omino['id'])}}">Modifica Omino</a>
<a href="{{route('eliminaOmino',$omino['id'])}}">Elimina omino</a>
</div>
@endsection
