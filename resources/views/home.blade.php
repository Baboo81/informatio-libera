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
                        @foreach ($homeData['banner']['subtitle'] as $line)
                            <span class="banner-line">
                                <i class="bi bi-lightbulb banner-icon"></i>
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
                <div class="col-12 col-box">
                    <section class="black-box">
                        <h2 class="text-center my-5">
                            {{ $homeData['main_content']['main_title1'] ?? '' }}
                        </h2>

                        <!-- Conteneur flex pour logo et texte -->
                        <div class="row">
                            <!-- Logo à gauche -->
                            <div class="col-md-4 d-flex justify-content-center justify-content-md-start logo-container">
                                <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}"
                                    alt="Logo du site représentant une ampoule avec un personnage à l'intérieur"
                                    class="main-logo">
                            </div>

                            <div class="col-md-8">
                                <!-- Texte avec guillemets à droite -->
                                <article class="quote d-flex align-items-start">
                                    <p class="quote-text text-center">
                                        {{ $homeData['main_content']['content'] ?? '' }}
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!-- fin flex container -->

                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : main-Content END --}}

    {{-- Section : comments --}}
    <section id="comments"class="comments">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <h2 class="text-center">{{ $homeData['main_content']['main_title2'] ?? '' }}</h2>
                <div class="col-12 comments-box">
                    @forelse ($comments as $comment)
                        <div class="comment-bubble mb-4">
                            <div class="bubble-content">
                                <strong>{{ $comment->user->name }}</strong>
                                <p class="mb-1">{{ $comment->content }}</p>
                                <small class="text-muted">
                                    {{ $comment->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    @empty
                        <p>Aucun commentaire pour le moment.</p>
                    @endforelse

                    @auth
                        <div class="card shadow-sm mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Laisser un commentaire</h5>

                                <form action="{{ route('comments.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="4"
                                            placeholder="Écrire un commentaire..." required>{{ old('content') }}</textarea>

                                        @error('content')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn">
                                            Publier
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="alert alert-info mt-4">
                            <a href="{{ route('login') }}" class="alert-link">Connectez-vous</a>
                            pour laisser un commentaire.
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </section>
    {{-- Section : comments END --}}
</x-app-layout>
