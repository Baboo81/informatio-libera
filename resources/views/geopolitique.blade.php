<x-app-layout>
    <section class="geopolitique-content">
        <div class="container">
            <div class="row">
                <h2 class="text-center"></h2>

                <div class="col-12">
                    @foreach ($geopolitiqueData as $card)
                        <x-card :title="$card['title']" :sub-title="$card['sub_title'] ?? null" :image="$card['image']" :icon="$card['icon'] ?? null">
                            @foreach ($card['blocks'] as $block)
                                <p>{{ $block['content'] }}</p>

                                @if (!empty($block['links']))
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        @foreach ($block['links'] as $link)
                                            <a href="{{ $link['url'] }}" class="btn btn-outline-primary" target="_blank"
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
