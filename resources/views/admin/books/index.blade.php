@extends('layouts.app')
@include('layouts.main.session')
@section('content')
    <section class="admin-book container">
        <nav>
            <a href="{{route('library.admin.books.create')}}">Add books</a>
        </nav>
        <table>
            <thead>
            <tr>
                <th>Bookname</th>
                <th>Author</th>
                <th>Mark</th>
                <th>Date Created</th>
            </tr>
            </thead>
            <tboby>
                @foreach($books as $book)
                    <tr>
                        <td data-label=" Name Book "><a
                                href="{{route('library.admin.books.edit',$book->id)}}">{{$book->bookname}}</a></td>
                        <td data-label="Author">{{$book->author->firstName}} {{$book->author->lastName}}</td>
                        <td data-label="Mark">{{$book->mark}}</td>
                        <td data-label="Date Created">{{$book->created_at}}</td>
                    </tr>
                @endforeach
            </tboby>
        </table>
    </section>
@endsection
