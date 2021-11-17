@extends('layout.base')

@section('pageContent')

<img src="{{asset($comic["thumb"])}}" alt="fumetto">
<h1>{{$comic["title"]}}</h1>

<p>
    {{$comic["description"]}}
</p>

@endsection