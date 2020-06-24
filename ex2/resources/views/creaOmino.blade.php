@extends('main_layout')

@section("content")
  <div class="omini">
    <form class="" action="{{route('storeOmino')}}" method="post">
      @csrf
      @method('POST')
      <label for="nome">nome</label>
      <input type="text" name="nome" value="">
      <br>
      <label for="cognome">cognome</label>
      <input type="text" name="cognome" value="">
      <br>
      <label for="indirizzo">indirizzo</label>
      <input type="text" name="indirizzo" value="">
      <br>
      <label for="cap">cap</label>
      <input type="text" name="cap" value="">
      <br>
      <label for="nazione">nazione</label>
      <input type="text" name="nazione" value="">
      <br>
      <label for="telefono">telefono</label>
      <input type="text" name="telefono" value="">
      <br>
      <label for="ruolo">ruolo</label>
      <input type="text" name="ruolo" value=""> <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
@endsection
