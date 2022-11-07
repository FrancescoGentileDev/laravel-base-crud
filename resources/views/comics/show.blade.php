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
@endsection
