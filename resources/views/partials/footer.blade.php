<footer class="mt-5 py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            {{-- Logo --}}
            <div class="mb-2 mb-md-0">
                <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}" alt="Logo du site représentant une ampoule avec à l'intérieure un bonhomme lisant un livre" height="40">
            </div>
            {{-- Contact --}}
            <div class="mb-2 mb-md-0">
                <a href="mailto:magicbaboo@gmail.com" class="text-dark text-decoration-none">
                    <i class="bi bi-envelope-fill me-1">
                        contact
                    </i>
                </a>
            </div>
            {{-- Dev --}}
            <div class="text-muted small">
                &copy; {{ date('Y') }} - Développé par
                <a href="https://kenko-web.be" target="_blank" class="text-decoration-none text-dark fw-semibold">
                    Kenko-web
                </a>
            </div>
        </div>
    </div>
</footer>
