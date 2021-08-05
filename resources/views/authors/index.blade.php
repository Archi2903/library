@extends('layouts.app')

@section('content')
    <section class="library">
        <div class="wrapper libr">
            <h2> More than 100+<br> Add new books everyDay</h2>
            <div class="cards">
                @foreach($authors as $author)
                    <div class="card">
                        <img
                            src="https://s3-us-east-2.amazonaws.com/maryville/wp-content/uploads/2020/01/07163629/author-at-work.jpg"
                            alt="book" style="height: 230px">
                        <div class="card-container">
                            <p>Author: <a
                                    href="{{route('authors.show',$author->id)}}">{{$author->firstName}} {{$author->lastName}}</a>
                            </p>
                            <div class="card-info">
                                <div class="money">$3,5</div>
                                <div class="info">
                                    <span><i class="fab fa-amazon-pay"></i>123</span>
                                    <span><i class="fas fa-book-open"></i>{{$author->books_count}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="button-search">
                <form action="#">
                    <input type="text" placeholder="Search Location">
                    <input type="submit" value="Search">
                </form>
                <button class="all">View all Authors</button>
            </div>
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
