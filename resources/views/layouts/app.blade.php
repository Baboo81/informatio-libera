<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Informatio Libera - Réinformation et analyse de l'actualité</title>

    <meta name="description"
        content="Informatio Libera propose des analyses, réflexions et ressources autour de l'actualité, de la géopolitique, de la santé et des enjeux contemporains.">

    <meta name="keywords"
        content="actualité, géopolitique, santé, réinformation, analyse, société, technologie">

    <meta name="author" content="Informatio Libera">

        <!-- Open Graph -->
    <meta property="og:title"
        content="Informatio Libera - Réinformation et analyse de l'actualité">

    <meta property="og:description"
        content="Analyses et ressources autour de l'actualité, de la géopolitique, de la santé et des enjeux contemporains.">

    <meta property="og:type" content="website">

    <meta property="og:url" content="https://informatio-libera.be">

    <meta property="og:image"
        content="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}">

    <!-- Bootstrap 5 CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap 5 : icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Favicon -->
    <link rel="icon"
        type="image/png"
        href="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap 5 JS (bundle avec Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" defer crossorigin="anonymous">
    </script>
</head>

<body class="">
    <div class="">
        @include('partials.navbar')

        <!-- Page Heading -->
        @isset($header)
            <header class="">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
