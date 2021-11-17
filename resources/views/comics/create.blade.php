@extends('layout.base')

@section('pageContent')

<h1>Inserisci un nuovo fumetto</h1>
<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insersci titolo" value="{{ old('title') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="type">Serie</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci la serie" value="{{ old('series') }}">

		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="cooking_time">Tipo</label>
		<input type="text" class="form-control" id="cooking_time" name="cooking_time" placeholder="Insersci il tipo" value="{{ old('type') }}">

		@error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="weight">Prezzo</label>
		<input type="number" class="form-control" id="weight" name="weight" placeholder="Insersci il prezzo" value="{{ old('prezzo') }}">

		@error('cooking_time')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione fumetto</label>
		<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione">{{old('description')}}</textarea>

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