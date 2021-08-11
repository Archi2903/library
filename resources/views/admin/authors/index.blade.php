@extends('layouts.app')
@section('content')
    <h1>Admin: Authors</h1>
    <section class="admin-authors">
        <nav>
            <a href="#" class="">Add authors</a>
        </nav>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Birthday</th>
                <th>Books</th>
                <th>Book ID</th>
                <th>Date Created</th>
            </tr>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td>{{$author->firstName}} {{$author->lastName}}</td>
                    <td>{{$author->dateBirth}}</td>
                    <td>{{$author->books_count}}</td>
                    <td>{{$author->book_id}}</td>
                    <td>{{$author->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
