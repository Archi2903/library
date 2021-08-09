<nav>
    <input type="checkbox" id="checkbox-menu">
    <label for="checkbox-menu">
        <ul class="menu touch">
            <li><a class="logo" href="#">Library</a></li>
            <li><a href="#">About</a></li>
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li><a href="{{route('library.admin.authors.index')}}">Authors</a></li>
                <li><a href="{{route('library.admin.books.index')}}">Books</a></li>
            @endguest
        </ul>
        <span class="toggle">&#9776</span>
    </label>
</nav>
