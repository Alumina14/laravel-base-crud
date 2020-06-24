@extends ("main_layout")

@section("content")

<div class="main">

id: {{$cagnolini["id"]}} <br>
nome: {{$cagnolini["nome"]}} <br>
tipo: {{$cagnolini["tipo"]}} <br>
altezza: {{$cagnolini["altezza"]}} <br>
peso: {{$cagnolini["peso"]}} <br><br>
</div>

<a href="{{route('home')}}">Torna alla pagina precedente</a> <br>

@endsection
