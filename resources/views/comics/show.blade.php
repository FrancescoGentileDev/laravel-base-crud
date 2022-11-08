@extends('layoutMain')

@section('title')
{{$comic->title}}
@endsection


@section('content')
<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="">
<p>
    {{$comic->description}}</p>
    ${{$comic->price}}

<input type="button" id="deleteButton" value="DELETE">
<form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST" id="deleteForm">
    @csrf
    @method('DELETE')
</form>

@endsection
