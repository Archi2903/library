@extends('layouts.app')
@section('content')
    <h1>Admin: Authors</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggler-md navbar-dark bg-dark">
                    <a href="#" class="btn btn-primary">Add authors</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date Birthday</th>
                                <th>Book ID</th>
                                <th>Date Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($authors as $author)
                                <tr>
                                    <td>{{$author->id}}</td>
                                    <td>{{$author->firstName}} {{$author->lastName}}</td>
                                    <td>{{$author->dateBirth}}</td>
                                    <td>{{$author->book_id}}</td>
                                    <td>{{$author->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
