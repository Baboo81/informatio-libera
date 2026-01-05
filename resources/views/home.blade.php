<x-app-layout>
    <section class="banner">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-4">
                    <div class="box d-flex justify-content-center align-items-center rounded-5">
                        <h1 class="bannerTitle text-center">
                            {{ $homeData['banner']['main_Title'] }}
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
</x-app-layout>
