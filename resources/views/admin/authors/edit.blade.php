@extends('layouts.app')
@section('content')
    <section class="form">
        <form action="library.admin.authors.store" method="post">
            @csrf
            <div class="form-group">
                <label for="firstName">FirstName</label>
                <input name="firstNam"
                       value="First Name"
                       id="title"
                       type="text"
                       class="form-control"
                       minlength="3"
                       required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input name="lastName"
                       value="Last Name"
                       id="lastName"
                       type="text"
                       class="form-control"
                       minlength="3"
                       required>
            </div>
            <div class="form-group">
                <label for="dateBirth">Date Birthday</label>
                <input name="dateBirth"
                       value="Date Birthday"
                       id="dateBirth"
                       type="date"
                       class="form-control"
                       minlength="3"
                       required>
            </div>
            <button type="submit">ADD</button>
        </form>
    </section>
@endsection
