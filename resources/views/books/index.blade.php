@extends('layouts.app')

@section('content')
    <section class="library">
        <div class="wrapper libr">
            <h2> More than 100+<br> Add new books everyDay</h2>
            <div class="cards">
                @foreach($books as $book)
                    <div class="card">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_50nvz3iAb6xHwouONzkctE5Yg5np_uPirw&usqp=CAU"
                            alt="book" style="height: 230px">
                        <div class="card-container">
                            <h3>{{$book->bookname}}</h3>
                            <p><a
                                    href="{{route('authors.show',$book->author->id)}}">{{$book->author->firstName}} {{$book->author->lastName}}</a>
                            </p>
                            <div class="card-info">
                                <div class="money">$3,5</div>
                                <div class="info">
                                    <span><i class="fas fa-star"></i>{{$book->mark}}</span>
                                    <span><i class="fas fa-book-open"></i>5</span>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
    </section>
@endsection
