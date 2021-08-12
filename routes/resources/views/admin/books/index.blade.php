@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Bookname</th>
            <th>Author</th>
            <th>Date Created</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->bookname}}</td>
                <td>{{$book->author->firstName}}  {{$book->author->lastName}}</td>
                <td>{{$book->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection
