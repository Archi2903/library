@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>ID book</th>
            <th>Namebook</th>
            <th>Date create</th>
            <th>Author</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->bookname}}</td>
                <td>{{$book->created_at}}</td>
                <td>{{$book->author->firstName}} {{$book->author->lastName}}</td>
                <td>{{}}</td>
            </tr>
        @endforeach
    </table>
@endsection
