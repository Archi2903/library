@extends('layouts.app')
@section('content')
    <section class="form">
        @if($book->exists)
            {{--        Форма для редактирования book--}}
            <form method="post" action="{{route('library.admin.books.update',$book->id)}}">
                @method('PATCH')
                @else
                    {{--        Форма для создания новой book--}}
                    <form method="post" action="{{route('library.admin.books.store',$book->id)}}">
                        @endif
                        @csrf
                        <div class="form-container">
                            <div class="form-main">
                                <div class="form-group">
                                    <label for="bookname">BoosName</label>
                                    <input name="bookname"
                                           value="{{$book->bookname}}"
                                           id="bookname"
                                           type="text"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input name="slug"
                                           value="{{$book->slug}}"
                                           id="slug"
                                           type="text"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="author_id">Author ID</label>
                                    <input name="author_id"
                                           value="{{$book->author->id}}"
                                           id="author_id"
                                           type="number"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                                {{--                                <div class="form-group">--}}
                                {{--                                    <select name="author_id" id="author_id">--}}
                                {{--                                        @foreach($book->authors as $author)--}}
                                {{--                                            <option value="{{$author->id}}">{{$author->id}}</option>--}}
                                {{--                                        @endforeach--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                                <div class="form-group">
                                    <select name="mark" id="mark">
                                        <option value="{{$book->mark}}">{{$book->mark}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-add">
                                <div class="form-group">
                                    <label for="created">Created</label>
                                    <input type="text" value="{{$book->created_at}}" class="created" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="updated">Updated</label>
                                    <input type="text" value="{{$book->updated_at}}" class="updated" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="deleted">Deleted</label>
                                    <input type="text" value="{{$book->deleted_at}}" class="deleted" disabled>
                                </div>
                            </div>
                        </div>
                        <button type="submit">ADD</button>
                    </form>
                    <form action="{{route('library.admin.books.destroy',$book->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
    </section>
@endsection
