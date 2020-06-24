@extends('main_layout')

@section("content")
  <div class="omini">
    <form class="" action="{{route('aggiornaOmino', $omino['id'])}}" method="post">
      @csrf
      @method('POST')
      <label for="nome">nome</label>
      <input type="text" name="nome" value="{{$omino['nome']}}">
      <br>
      <label for="cognome">cognome</label>
      <input type="text" name="cognome" value="{{$omino['cognome']}}">
      <br>
      <label for="indirizzo">indirizzo</label>
      <input type="text" name="indirizzo" value="{{$omino['indirizzo']}}">
      <br>
      <label for="cap">cap</label>
      <input type="text" name="cap" value="{{$omino['cap']}}">
      <br>
      <label for="nazione">nazione</label>
      <input type="text" name="nazione" value="{{$omino['nazione']}}">
      <br>
      <label for="telefono">telefono</label>
      <input type="text" name="telefono" value="{{$omino['telefono']}}">
      <br>
      <label for="ruolo">ruolo</label>
      <input type="text" name="ruolo" value="{{$omino['ruolo']}}"> <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
@endsection
