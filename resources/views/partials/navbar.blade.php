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
                <li>
                    <a href="{{ route('home') }}" class="active">
                        <i class="bi bi-house me-2"></i>Accueil
                    </a>
                </li>
                <li class="dropdown"><a href="#"><span>Catégories</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li>
                            <a href="{{ route('geopolitique') }}">
                                <i class="bi bi-globe-europe-africa me-2"></i>Géopolitique
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sante') }}">
                                <i class="bi bi-heart-pulse me-2"></i>Santé
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('actualite') }}">
                                <i class="bi bi-newspaper me-2"></i>Actualité
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('souverainete') }}">
                                <i class="bi bi-bank me-2"></i>Souveraineté
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('psycho') }}">
                                <i class="bi bi-person-gear me-2"></i>Psychologie
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sciences') }}">
                                <i class="bi bi-lightbulb me-2"></i>Sciences
                            </a>
                        </li>

                        {{-- Séparateur --}}
                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header text-center mt-3">Entraide</h6></li>
                        <li>
                            <a href="{{ route('entraide') }}">
                                <i class="bi bi-people me-2"></i>Réseaux d'entreaide
                            </a>
                        </li>

                        {{-- Séparateur --}}
                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header text-center mt-3">Communautés libres</h6></li>
                        <li>
                            <a href="{{ route('plateFormesDiffusion') }}">
                                <i class="bi bi-broadcast me-2"></i>Plateformes de diffusion
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Utilisateur non connecté --}}
                @guest
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Connexion
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <i class="bi bi-person-plus me-2"></i>Inscription
                        </a>
                    </li>
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

        <a class="btn" href="#contact">Contactez-moi</a>

    </div>
</header>
