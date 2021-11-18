@extends('layout.base')

@section('pageContent')

<h1>Modifica il seguente fumetto : {{$comic["title"]}}</h1>
<form action="{{route("comics.update", $comic["id"])}}" method="POST">
	@csrf
    @method('PUT')

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci titolo" value="{{$comic["title"]}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="series">Serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci la serie" value="{{$comic["series"]}}">

		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="type">Tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo" value="{{$comic["type"]}}">

		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insersci il prezzo" value="{{$comic["price"]}}">

		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione fumetto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{$comic["description"]}}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="image">Immagine</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Insersci l'url dell'immagine" value="{{$comic["image"]}}">

		@error('image')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

    <button type="submit" class="btn btn-primary">Modifica</button>
</form>

@endsection