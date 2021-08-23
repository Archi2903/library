@extends('layouts.app')
@section('content')
    <section class="detailed wrapper">
        <h2>{{$author->firstName}} {{$author->lastName}}</h2>
        <p>Was born {{$author->dateBirth}}</p>
        <p>Lorem ipsum dolor sit amet, consectetur.</p>
        <div class="detail-container">
            <div class="detail-img-container">
                <img src="/img/author 1.png" alt="photo">
            </div>
            <div class="detail-text">
                <h3>Books:</h3>
                @foreach($author->books as $book)
                    <h4>{{$book->bookname}}</h4>
                    <p>Date Created: {{$book->created_at}}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dignissimos esse quos repudiandae
                        temporibus! Accusamus consectetur est nam optio repellat.</p>
                @endforeach
            </div>
        </div>
    </section>
@endsection
