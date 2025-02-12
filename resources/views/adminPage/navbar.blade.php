<!-- resources/views/admin/navbar.blade.php -->
<nav class="navbarNav">
    <ul class="navbar-listNav">
        <div class="logoNav">
            <img src="{{ asset('images/logolib.jpg') }}" alt="Logo" />
            <h1>Starlight Reads!</h1>
        </div>

        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

        <li class="dropdownNav">
            <span id="booksDropdown" class="dropdown-toggleNav">Books ▾</span>
            <ul class="dropdown-menuNav" id="booksMenu" >
                <li><a href="{{ route('admin.editDeleteBooks') }}">Books List</a></li>
                <li><a href="{{ route('admin.addBook') }}">Add Books</a></li>
            </ul>
        </li>

        <li><a href="{{ route('admin.users') }}">Users</a></li>
        <li><a href="{{ route('admin.loans') }}">Loans</a></li>
    </ul>

    <div class="profile-sectionNav">
        <a href="{{ route('admin.profile') }}" class="profile-linkNav">
            <i class="profile-iconNav"></i>
            <span class="profile-textNav">{{ Auth::user()->name }}</span>
        </a>
    </div>
</nav>

<!-- JavaScript pour gérer le menu Books -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const booksDropdown = document.getElementById("booksDropdown");
        const booksMenu = document.getElementById("booksMenu");

        booksDropdown.addEventListener("click", function (event) {
            event.stopPropagation();
            booksMenu.classList.toggle("show");
        });

        document.addEventListener("click", function () {
            booksMenu.classList.remove("show");
        });

        booksMenu.addEventListener("click", function (event) {
            event.stopPropagation();
        });
    });
</script>
