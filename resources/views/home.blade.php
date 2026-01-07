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
                <h2 class="text-center">Que vous propose Informatio Libera ?</h2>
                <div class="col-8">
                    <article class="quote">
                        <div class="text-start">
                            <img src="{{ asset('assets/img/svg/guillemetsO.svg') }}"
                                alt="picto représentant des guillemets" class="quote-open">
                        </div>
                        <p class="text-center">
                            {{ $homeData['main_content']['content'] ?? '' }}
                        </p>
                        <div class="text-end">
                            <img src="{{ asset('assets/img/svg/guillemetsF.svg') }}"
                                alt="picto représentant des guillemets" class="quote-close">
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : main-Content END --}}

    {{-- Section : comments --}}
    <section id="comments">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <h2 class="text-center">Laissez-moi votre commentaire</h2>
                <div class="col-8 comments-box">
                    @forelse ($comments as $comment)
                        <div class="comment">
                            <strong>{{ $comment->user->name }}</strong>
                            <p>{{ $comment->content }}</p>
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                    @empty
                        <p>Aucun commentaire pour le moment.</p>
                    @endforelse

                    @auth
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <textarea name="content" required placeholder="Écrire un commentaire..."></textarea>
                            <button type="submit">Publier</button>
                        </form>
                    @else
                        <p>
                            <a href="{{ route('login') }}">Connectez-vous</a> pour laisser un commentaire.
                        </p>
                    @endauth
                </div>
            </div>
        </div>
    </section>
    {{-- Section : comments END --}}
</x-app-layout>
