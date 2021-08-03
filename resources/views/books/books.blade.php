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
                <td>{{$book->name}}</td>
                <td>{{$book->dateCreat}}</td>
                <td>{{$book->authors->id}}</td>
            </tr>
        @endforeach
    </table>
@endsection
