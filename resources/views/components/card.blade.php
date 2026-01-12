<div class="col-12 col-lg-4">
    <div class="card box-shadow mx-auto my-5" style="width: 43rem; position: relative;">

        {{-- Image avec wrapper pour la vague --}}
        @if ($image)
            <div class="card-image-wrapper position-relative">
                <img src="{{ $image }}" class="card-img-top fixed-height-img" alt="{{ $title }}">

                {{-- SVG décoratif sous l'image --}}
                <svg class="card-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" aria-hidden="true">
                    <path fill="#0D1B2A" fill-opacity="1"
                        d="M0,192L48,197.3C96,203,192,213,288,192C384,171,480,117,576,90.7C672,64,768,64,864,85.3C960,107,1056,149,1152,186.7C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                    </path>
                </svg>
            </div>
        @endif

        {{-- Body --}}
        <div class="card-body text-center">
            <h5 class="card-title">{{ $title }}</h5>
            <h6 class="card-title">{{ $subTitle }}</h6>
            <hr>
            <p class="card-text">{{ $slot }}</p>
        </div>

        {{-- Icône / lien --}}
        @if ($icon && $link)
            <a href="{{ $link }}" class="text-center mb-3" aria-label="Lire la suite : {{ $title }}">
                <i class="card-style{{ $icon }}"></i>
            </a>
        @endif
    </div>
</div>
