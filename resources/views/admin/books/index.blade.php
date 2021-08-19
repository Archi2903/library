@extends('layouts.app')
@include('layouts.main.session')
@section('content')
    <section class="admin-book container">
        <nav>
            <a href="{{route('library.admin.books.create')}}">Add books</a>
        </nav>
        <table>
            <tr>
                <th>Bookname</th>
                <th>Author</th>
                <th>Mark</th>
                <th>Date Created</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td><a href="{{route('library.admin.books.edit',$book->id)}}">{{$book->bookname}}</a></td>
                    <td>{{$book->author->firstName}} {{$book->author->lastName}}</td>
                    <td>{{$book->mark}}</td>
                    <td>{{$book->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </section>
@endsection
