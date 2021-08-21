@extends('layouts.app')
@section('main')
    @include('layouts.main.intro-wrapper')
    @include('layouts.main.stats-wrapper')
    @include('layouts.main.steps')
@endsection
@section('content')
    <section class="library">
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Data Birthday</th>
                <th>Books</th>
                <th>Books count</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td>
                        <a href="{{route('authors.show',$author->id)}}">{{$author->firstName}} {{$author->lastName}}</a>
                    </td>
                    <td>{{$author->dateBirth}}</td>
                    <td class="td-books">
                        @foreach($author->books as $book)
                            <li>{{$book->bookname}}</li>
                        @endforeach
                    </td>
                    <td>
                        {{$author->books_count}} book
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="button-search">
            <form action="#">
                <input type="text" placeholder="Search Location">
                <input type="submit" value="Search">
            </form>
            <button class="all">View all Authors</button>
        </div>
    </section>
    <section class="authors">
        <div class="wrapper">
            <h2>Our authors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                <br> Cupiditate labore natus quas!</p>
            <div class="author-cards">
                @foreach($authors as $author)
                    <div class="author-card">
                        <img src="/img/author.png" alt="author">
                        <div class="author-info">
                            <p>Author</p>
                            <div class="author-block">
                                <p class="author-name">{{$author->firstName}} {{$author->lastName}}</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
