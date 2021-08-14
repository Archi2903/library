@extends('layouts.app')
@section('content')
    <section class="form">
        @if($author->exists)
            {{--        Форма для редактирования автора--}}
            <form method="post" action="{{route('library.admin.authors.update',$author->id)}}">
                @method('PATCH')
                @else
                    {{--        Форма для создания нового автора--}}
                    <form method="post" action="{{route('library.admin.authors.store',$author->id)}}">
                        @endif
                        @csrf
                        <div class="form-container">
                            <div class="form-main">
                                <div class="form-group">
                                    <label for="firstName">FirstName</label>
                                    <input name="firstName"
                                           value="{{$author->firstName}}"
                                           id="firstName"
                                           type="text"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input name="lastName"
                                           value="{{$author->lastName}}"
                                           id="lastName"
                                           type="text"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="dateBirth">Date Birthday</label>
                                    <input name="dateBirth"
                                           value="{{$author->dateBirth}}"
                                           id="dateBirth"
                                           type="date"
                                           class="form-control"
                                           minlength="3"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input name="slug"
                                           value="{{$author->slug}}"
                                           id="slug"
                                           type="text"
                                           class="form-control"
                                           minlength="1"
                                           required>
                                </div>
                            </div>
                            <div class="form-add">
                                <div class="form-group">
                                    <label for="created">Created</label>
                                    <input type="text" value="{{$author->created_at}}" class="created" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="updated">Updated</label>
                                    <input type="text" value="{{$author->updated_at}}" class="updated" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="deleted">Deleted</label>
                                    <input type="text" value="{{$author->deleted_at}}" class="deleted" disabled>
                                </div>
                            </div>
                        </div>
                        <button type="submit">ADD</button>
                    </form>
                    @if($author->exists)
                        <form action="{{route('library.admin.authors.destroy',$author->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
        @endif

    </section>
@endsection
