<header id="header" class="header d-flex align-items-center fixed-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}"
                alt="Logo du site, ce logo représente une ampoule avec à l'intérieure un personnage assis sur une pile de livres">
            <h1 class="sitename text-center">Informatio Libera</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Accueil</a></li>
                <li><a href="#">Qui suis-je ?</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown"><a href="#"><span>Catégories</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Géopolitique</a></li>
                        <li><a href="#">Économie</a></li>
                        <li><a href="#">Santé</a></li>
                        <li><a href="#">Actualité</a></li>
                        <li><a href="#">Souveraineté</a></li>
                        <li><a href="#">Psychologie</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Livres</a></li>
                {{-- Utilisateur non connecté --}}
                @guest
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                @endguest
                {{-- Utilisateur connecté --}}
                @auth
                    <li class="dropdown">
                        <a href="#">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Déconnexion
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn" href="#about">Commencer</a>

    </div>
</header>
