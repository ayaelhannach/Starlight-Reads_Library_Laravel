@extends('layouts.app')

@section('content')
    <div class="about-content">
        <div class="about-text animate-slide-in-left">
            <h2>About Us</h2>
            <p>
                Welcome to Starlight Reads, your web platform dedicated to the
                management and consultation of books. Designed to provide an 
                intuitive and enjoyable user experience, our application allows 
                readers to authenticate and access a vast collection of books,
                add or remove favorites, and discover additional information
                through the "About" and "Contact" pages. Furthermore, users have
                the option to purchase books with free delivery, making access to
                reading even more convenient and accessible. At Starlight Reads, we combine 
                simplicity and efficiency to meet the needs of book enthusiasts.
            </p>
            <button class="learn-more-button">Learn More</button>
        </div>

        <div class="about-image-container animate-slide-in-right">
            <img
                src="{{ asset('images/b3.jpeg') }}"
                alt="About Us"
                class="about-image"
            />
        </div>
    </div>
@endsection
