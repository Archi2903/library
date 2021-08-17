@if(session('success'))
    <section class="session">
        <h2>{{session()->get('success')}}</h2>
    </section>
@endif
