@extends('layouts.app')

@section('content')
    @foreach($authors as $author)
        <h2> Author: <a href="{{route('authors.show',$author->id)}}">{{$author->firstName}} {{$author->lastName}}</a></h2>
        <p>Data Birthday: {{$author->dateBirth}}}</p>
        <br>
        <h1>Book: {{$author->getBook->bookname}}</h1>
        <h2>Date Created: {{$author->getBook->created_at}}</h2>
    @endforeach
    {{--    <ul>--}}
    {{--        @foreach($author->getBook as $oneBook)--}}
    {{--            <li>{{$oneBook->bookname}}</li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}

@endsection
