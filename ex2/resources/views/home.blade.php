@extends('main_layout')

@section("content")
  <div class="omini">
    <ul>

      <a href="{{route('creaOmino')}}">Aggiungi nuovo omino</a> <br>

      @foreach ($omini as $omino)
        <li>Nome e Cognome: {{$omino["nome"]}} {{$omino["cognome"]}}
          <a href="{{route('mostraOmini',$omino['id'])}}">Info omino</a> </li>
      @endforeach
    </ul>
  </div>
@endsection
