@extends('layout.base')

@section('pageContent')
<h1>Lista di tutti i fumetti</h1>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Serie</th>
		<th scope="col">Tipo</th>
		<th scope="col">Prezzo</th>
		<th scope="col">Azioni</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["title"]}}</td>
		<td>{{$comic["series"]}}</td>
		<td>{{$comic["type"]}}</td>
		<td>{{$comic["price"]}} $</td>
		<td>
			<a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
		</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection