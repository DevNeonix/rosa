<nav class="navbar navbar-rose navbar-expand-md navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">{{env('app_name')}}</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ active('poemas.*') }}" href="#">Poemas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ active('articulos.*') }}" href="#">Articulos</a>
            </li>
        </ul>
    </div>
</nav>