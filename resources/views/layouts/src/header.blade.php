<!-- Header Area -->
<header class="header-area">
    <nav class="navbar navbar-expand-lg menu_one sticky-nav">
        <div class="container-fluid">
            <a class="navbar-brand header_logo" href="{{route('welcome')}}">
                <img class="white_logo main_logo" src="{{asset('assets/images/logo/logo.png')}}" alt="Terminal Florencia" width="200">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu_toggle">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="hamburger-cross">
                    <span></span>
                    <span></span>
                </span>
            </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarText">
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item active">
                    <a href="{{route('welcome')}}" class="nav-link dropdown-toggle">Inicio</a>
                </li>
                <li class="nav-item dropdown submenu">
                    <a href="#" class="nav-link dropdown-toggle">Nosotros</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Misión</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Visión</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Valores Corporativos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Reseña Historica</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Políticas</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle">Noticias</a>
                </li>
                <li class="nav-item dropdown submenu">
                    <a href="#" class="nav-link dropdown-toggle">Galería</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Fotos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Videos</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle">Contacto</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Header Area -->
