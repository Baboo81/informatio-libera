<x-app-layout>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="bannerTitle">
                        {{ $homeData['banner']['main_Title'] }}
                    </h1>
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
</x-app-layout>
