@extends('layouts.app')

@section('content')
    @include('layouts.main.intro-wrapper')
    @include('layouts.main.stats-wrapper')
    @include('layouts.main.steps')
    <section class="library">
        <div class="wrapper libr">
            <h2> More than 100+<br>New books every day!!!</h2>
            <div class="cards">
                @foreach($books as $book)
                    <div class="card">
                        <img
                            src="/img/book.png" alt="book" >
                        <div class="card-container">
                            <h3>{{$book->bookname}}</h3>
                            <p><a
                                    href="{{route('authors.show',$book->author->id)}}">{{$book->author->firstName}} {{$book->author->lastName}}</a>
                            </p>
                            <div class="card-info">
                                <div class="money">$3,5</div>
                                <div class="info">
                                    <span><i class="fas fa-star"></i>{{$book->mark}}</span>
                                    <span><i class="fas fa-book-open"></i>357</span>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </section>
@endsection
