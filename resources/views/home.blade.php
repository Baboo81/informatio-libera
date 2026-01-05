<x-app-layout>
    {{-- Section : banner --}}
    <section class="banner">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="box d-flex justify-content-center align-items-center rounded-5">
                        <h1 class="bannerTitle text-center">
                            {{ $homeData['banner']['main_title'] ?? '' }}
                        </h1>
                    </div>
                </div>
                <div class="col-8">
                    <p>
                        @foreach ($homeData['banner']['subtitle'] as $line  )
                           <span class="banner-line">
                                {!! $line !!}
                           </span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : banner END --}}

    {{-- Section : main-Content --}}
    <section class="main-content">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-8">
                    <article class="quote">
                        <div class="text-start">
                            <img src="{{ asset('assets/img/svg/guillemetsO.svg') }}" alt="picto représentant des guillemets" class="quote-open">
                        </div>
                        <p class="text-center">
                            {{ $homeData['main_content']['content'] ?? '' }}
                        </p>
                        <div class="text-end">
                            <img src="{{ asset('assets/img/svg/guillemetsF.svg') }}" alt="picto représentant des guillemets" class="quote-close">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : main-Content END --}}
</x-app-layout>
