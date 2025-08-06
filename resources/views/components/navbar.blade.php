<nav class="navbar container">
    <img src="{{ asset('icon/logo.svg') }}" alt="" class="navbar-logo">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('careers') }}" class="nav-link {{ Route::is('careers') ? 'active' : '' }}">Careers</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}">About</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('security') }}" class="nav-link {{ Route::is('security') ? 'active' : '' }}">Security</a>
        </li>
    </ul>

    <div class="navbar-extra">
        <a href="#" class="btn">Sign Up</a>
        <a href="#" class="btn custom-btn-login">Login</a>
    </div>
</nav>
