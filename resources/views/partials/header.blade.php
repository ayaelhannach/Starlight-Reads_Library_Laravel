<header class="header">
    <div class="logo">
        <img src="{{ asset('images/logolib.jpg') }}" alt="Logo">
        <h1>Starlight Reads!</h1>
    </div>
    <nav>
        <ul class="nav-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li class="dropdown">
                <a href="#">Books Categories</a>
                <ul class="dropdown-menu">
                    <li><a href="">Category 1</a></li>
                    <li><a href="">Category 2</a></li>
                    <li><a href="">Category 3</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <div class="favorites-badge">
                <li><a href="{{ route('favorites') }}"><i class="fas fa-heart"></i></a></li>
                <li><a href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
            </div>
        </ul>
    </nav>
    <div>
            @auth
                <a href="{{ url('/admin') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Admin Profile</a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-green-500 text-white rounded">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-500 text-white rounded ml-2">Register</a>
            @endauth
    </div>
</header>
