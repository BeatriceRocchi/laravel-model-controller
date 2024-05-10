<header>
    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="{{ Route::currentRouteName() === 'home' ? 'active nav-link' : 'nav-link' }}"
                        aria-current="page" href="{{ route('home') }}">Today's movies</a>
                    <a class="{{ Route::currentRouteName() === 'best-movies' ? 'active nav-link' : 'nav-link' }}"
                        href="{{ route('best-movies') }}">Critically acclaimed movies</a>
                    <a class="{{ Route::currentRouteName() === 'recent-movies' ? 'active nav-link' : 'nav-link' }}"
                        href="{{ route('recent-movies') }}">Movies from the 90's</a>
                </div>
            </div>
        </div>
    </nav>
</header>
