<x-app-layout>
    <section class="geopolitique-content">
        <div class="container">
            <div class="row">
                <h2 class="text-center"> {{ $geopolitiqueData['main_title'] ?? '' }} </h2>
                <article class="col-12 text-center">
                    <p> {{ $geopolitiqueData['intro'] ?? '' }} </p>
                </article>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    @foreach ($themesData as $card)
                        <x-card :title="$card['title']" :sub-title="$card['sub_title'] ?? null" :image="$card['image']" :icon="$card['icon'] ?? null">
                            @foreach ($card['blocks'] as $block)
                                <p>{{ $block['content'] }}</p>

                                @if (!empty($block['links']))
                                    <div class="d-flex justify-content-center flex-wrap gap-2 mb-3">
                                        @foreach ($block['links'] as $link)
                                            <a href="{{ $link['url'] }}" class="btn" target="_blank"
                                                rel="noopener">
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
