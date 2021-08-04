@extends('layouts.app')
@section('content')
    <h2>{{$author->firstName}} {{$author->lastName}}</h2>

    <p>{{$author->book_id}}</p>

@endsection
