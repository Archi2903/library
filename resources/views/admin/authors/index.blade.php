@extends('layouts.app')
@section('content')
    <h1>Admin: Authors</h1>
    <section class="admin-authors">
        <nav>
            <a href="{{route('library.admin.authors.create')}}">Add authors</a>
        </nav>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date Birthday</th>
                <th>Books</th>
                <th>Books name</th>
                <th>Book ID</th>
                <th>Date Created</th>
            </tr>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td>{{$author->firstName}} {{$author->lastName}}</td>
                    <td>{{$author->dateBirth}}</td>
                    <td>{{$author->books_count}}</td>

                    <td>
                        @foreach($author->books as $book)
                            <li>{{$book->bookname}}</li>
                        @endforeach
                    </td>
                    <td>{{$author->book_id}}</td>
                    <td>{{$author->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
