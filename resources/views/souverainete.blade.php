<x-app-layout>
    <section class="souverainete-content">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center"> {{ $souveraineteData['main_title'] ?? '' }} </h2>
                <article class="col-lg-8 col-md-10 col-12 text-center quote">
                    <div class="text-start">
                        <img src="{{ asset('assets/img/svg/guillemetsO.svg') }}" alt="picto représentant des guillemets"
                            class="quote-open">
                    </div>
                    <p class="lead fst-italic">
                        {{ $souveraineteData['intro'] ?? '' }}
                    </p>
                    <div class="text-end">
                        <img src="{{ asset('assets/img/svg/guillemetsF.svg') }}" alt="picto représentant des guillemets"
                            class="quote-close">
                    </div>
                </article>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 block-card">
                    @foreach ($themesData as $card)
                        <x-card :title="$card['title']" :sub-title="$card['sub_title'] ?? null" :image="$card['image']" :icon="$card['icon'] ?? null">
                            @foreach ($card['blocks'] as $block)
                                <p>{{ $block['content'] }}</p>

                                @if (!empty($block['links']))
                                    <div class="d-flex justify-content-center flex-wrap gap-2 mb-3">
                                        @foreach ($block['links'] as $link)
                                            <a href="{{ $link['url'] }}" class="btn" target="_blank" rel="noopener">
                                                {{ $link['label'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </x-card>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
