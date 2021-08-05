@extends('layouts.app')

@section('content')
    @foreach($authors as $author)
        <h2> Author: <a href="{{route('authors.show',$author->id)}}">{{$author->firstName}} {{$author->lastName}}</a>
        </h2>
        <h2>Books: {{$author->books_count}}</h2>
        <ol>
            @foreach($author->books as $book)
                <li>{{$book->bookname}}</li>
            @endforeach
        </ol>
        <br>
    @endforeach
@endsection
