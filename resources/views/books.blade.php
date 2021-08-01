@extends('layouts.app')

@section('content')
    <table>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->dateCreat}}</td>
            </tr>
        @endforeach
    </table>
@endsection
