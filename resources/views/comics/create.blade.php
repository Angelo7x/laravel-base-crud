@extends('layout.base')

@section('pageContent')

<h1>Inserisci un nuovo fumetto</h1>
<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci titolo" value="{{ old('Titolo') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="series">Serie</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci la serie" value="{{ old('Serie') }}">

		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="type">Tipo</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo" value="{{ old('Tipo') }}">

		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insersci il prezzo" value="{{ old('Prezzo') }}">

		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione fumetto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('Descrizione Fumetto')}}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="image">Immagine</label>
		<input type="text" class="form-control" id="image" name="image" placeholder="Insersci l'url dell'immagine" value="{{ old('thumb') }}">

		@error('image')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

    <button type="submit" class="btn btn-primary">Crea</button>
</form>

@endsection