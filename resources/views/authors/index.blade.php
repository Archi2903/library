@extends('layouts.app')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date Birthday</th>
            <th>Date Created</th>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td>{{$author->firstName}} {{$author->lastName}}</td>
                <td>{{$author->dateBirth}}</td>
                <td>{{$author->created_at}}</td>
            </tr>
        @endforeach
    </table>
@endsection
