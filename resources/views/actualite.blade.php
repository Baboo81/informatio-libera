<x-app-layout>
    <section class="actualite-content">
        <div class="container">
            <div class="row">
                <h2 class="text-center"></h2>
                <div class="col-12">
                    @foreach ($actualiteData as $card)
                        <x-card :title="$card['title']" :image="$card['image'] :link="$card['link']" :icon="$card['icon']">
                            {{ $card['content'] }}
                        </x-card>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
