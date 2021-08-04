@extends('layouts.app')
@section('content')
    <h2>Author: {{$author->firstName}} {{$author->lastName}}</h2>
    <p>Book Name: <em>{{$author->book->bookname}}</em></p>
    <p>Date Published: {{$author->book->created_at}}</p>
    <h1>{{$author->getBook->bookname}}</h1>

@endsection
