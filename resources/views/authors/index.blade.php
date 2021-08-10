@extends('layouts.app')
@section('main')
    @include('layouts.main.intro-wrapper')
    @include('layouts.main.stats-wrapper')
    @include('layouts.main.steps')
@endsection
@section('content')
    <section class="library">
        <div class="container">
            <div class="row justify-content-center">
                <div class="coll-md-12">
                    {{--                    @auth()--}}
                    <nav class="navbar navbar-toggler-md navbar-dark bg-dark">
                        <a href="#" class="btn btn-primary">Add author</a>
                    </nav>
                    {{--                    @endauth--}}
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Author</th>
                                    <th>Data Birthday</th>
                                    <th>Books</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($authors as $author)
                                    <tr>
                                        <td>{{$author->id}}</td>
                                        <td>
                                            <a href="#">{{$author->firstName}} {{$author->lastName}}</a>
                                        </td>
                                        <td>{{$author->dateBirth}}</td>
                                        <td>
                                            {{$author->books_count}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-search">
            <form action="#">
                <input type="text" placeholder="Search Location">
                <input type="submit" value="Search">
            </form>
            <button class="all">View all Authors</button>
        </div>


    </section>
    {{--    @foreach($authors as $author)--}}
    {{--        <h2> Author: <a href="{{route('authors.show',$author->id)}}">{{$author->firstName}} {{$author->lastName}}</a>--}}
    {{--        </h2>--}}
    {{--        <h2>Books: {{$author->books_count}}</h2>--}}
    {{--        <ol>--}}
    {{--            @foreach($author->books as $book)--}}
    {{--                <li>{{$book->bookname}}</li>--}}
    {{--            @endforeach--}}
    {{--        </ol>--}}
    {{--        <br>--}}
    {{--    @endforeach--}}
@endsection
