@extends('layouts.app')
@section('content')
    <h1>Admin: Authors</h1>
    @include('layouts.main.session')
    <section class="admin-authors container">
        <nav>
            <a href="{{route('library.admin.authors.create')}}">Add authors</a>
        </nav>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Birthday</th>
                <th>Books</th>
                <th>Books name</th>
                <th>Date Created</th>
            </tr>
            </thead>
            <tboby>
                @foreach($authors as $author)
                    <tr>
                        <td data-label="ID">{{$author->id}}</td>
                        <td data-label="Name">
                            <a href="{{route('library.admin.authors.edit',$author->id)}}">
                                {{$author->firstName}} {{$author->lastName}}</a>
                        </td>
                        <td data-label="Date Birthday">{{$author->dateBirth}}</td>
                        <td data-label="Books">{{$author->books_count}}</td>

                        <td data-label="Books name">
                            @foreach($author->books as $book)
                                <li>{{$book->bookname}}</li>
                            @endforeach
                        </td>
                        <td data-label="Date Created">{{$author->created_at}}</td>
                    </tr>
                @endforeach
            </tboby>
        </table>
    </section>
@endsection
