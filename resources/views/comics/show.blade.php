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

<form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
@endsection
