@extends ("main_layout")

@section("content")

<div class="main">

  @foreach ($cagnolini as $cane)

    nome: <a href="{{route('mostracagnolino', $cane['id'])}}">{{$cane["nome"]}}</a> <br>

  @endforeach

</div>

@endsection
