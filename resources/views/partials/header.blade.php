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
    <div class="auth-buttons">
        <a href=""><button class="sign-in">Sign In</button></a>
        <a href=""><button class="sign-up">Sign Up</button></a>
    </div>
</header>
