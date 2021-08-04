@extends('layouts.app')

@section('content')
    @foreach($authors as $author)
        <a href="{{route('authors.show',$author->id)}}"> <h2>{{$author->firstName}} {{$author->lastName}}</h2></a>
        <p>Data Birthday: {{$author->dateBirth}}}</p>
        <br>
    @endforeach
@endsection
