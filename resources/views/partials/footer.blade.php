<footer class="mt-5 py-3" id="contact">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center my-5">
            {{-- Logo --}}
            <div class="col-md-4 col-12 my-2 mb-md-0 text-center footer-right">
                <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}"
                    alt="Logo du site représentant une ampoule avec à l'intérieure un bonhomme lisant un livre"
                    height="180">
                <p class="mt-3">
                    Informatio Libera
                </p>
            </div>
            {{-- Contact --}}
            <div class="col-md-8 col-12 mb-2 mb-md-0 contact-content">
                <a href="mailto:magicbaboo@gmail.com" class="text-decoration-none">
                    <i class="bi bi-envelope me-3">
                        Pour me contacter, cliquez sur l'enveloppe
                    </i>
                </a>
            </div>
        </div>
        <div class="row dev-content">
            {{-- Dev --}}
            <div class="footer-top text-center">
                <div class="col-12 small my-3">
                    <p>&copy; {{ date('Y') }} - Développé par : </p>
                    <a href="https://kenko-web.be" target="_blank" class="text-decoration-none">
                        Kenko-web
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
