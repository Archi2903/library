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
        <div class="button-search">
            <form action="#">
                <input type="text" placeholder="Search Location">
                <input type="submit" value="Search">
            </form>
            <button class="all">View all Authors</button>
        </div>
    </section>
@endsection
