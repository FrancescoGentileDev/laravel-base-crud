@extends('layoutMain')

@section('title')
    Comics
@endsection

@section('content')
    <h1>Comics</h1>
    <div>
        <a href="{{route('comics.create')}}">Create new comic</a>

    </div>
    <hr>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                {{$comic->title}}
                </a>

            </li>
        @endforeach
    </ul>
