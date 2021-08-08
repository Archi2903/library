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
{{--    @auth()--}}
        <div class="container">
            <div class="row">
                <div class="coll-md-12">
                    <nav class="navbar navbar-toggler-md navbar-dark bg-dark">
                        <a href="#" class="btn btn-primary">Add book</a>
                    </nav>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Books</th>
                                    <th>Author</th>
                                    <th>Data created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{$book->id}}</td>
                                        <td>{{$book->bookname}}</td>
                                        <td>{{$book->author->firstName}}{{$book->author->lastName}}</td>
                                        <td>
                                            {{$book->created_at}}
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
{{--    @endauth--}}
@endsection
