<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CrossFit Heritage</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta property="og:title" content="CrossFit Heritage" />
        <meta property="og:description" content="Ta nouvelle salle de crossfit à Wavre." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content=""/>
        <meta property="og:image" content="" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="567" />
        <meta property="og:image:alt" content="CrossFit Heritage" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://rawcdn.githack.com/nextapps-de/spotlight/0.7.8/dist/spotlight.bundle.js"></script>
        @vite(["resources/css/app.css", "resources/sass/app.sass", "resources/js/app.js", "resources/js/main.js"])
    </head>
    
    <body class="font-sans antialiased relative text-burgundy-dark">
        <div class="w-screen h-screen fixed top-0 left-0 bg-burgundy fade_out"></div>

        <x-app.modal data-modal="newsletter">
            <form action="" class="">
                <x-app.h2 class="mb-3 text-burgundy">Reste informé !</x-app.h2>
                <x-app.paragraph class="!mt-0">Inscrit toi à la neswletter pour rester informé de nos actualités, évènement et promotion.</x-app.paragraph> 
                <div class="">
                    <x-app.label for="mail" >Ton e-mail</x-app.label>
                    <x-app.input type="text" id="mail" name="mail" placeholder="..."></x-app.input>
                </div>
                <div class="flex items-center w-full mt-6">
                    <x-app.button type="submit" class="!mx-0">Je m'inscris</x-app.button>
                </div>
            </form>
        </x-app.modal>

        <x-app.modal data-modal="download">
            <form action="" class="">
                <x-app.h2 class="mb-3 text-burgundy">Rejoins l'équipe !</x-app.h2>
                <x-app.paragraph class="!mt-0">Inscrit toi à la neswletter pour recevoir la photo sans le logo</x-app.paragraph> 
                <div class="">
                    <x-app.label for="mail" >Ton e-mail</x-app.label>
                    <x-app.input type="text" id="mail" name="mail" placeholder="..."></x-app.input>
                </div>
                <div class="flex items-center w-full mt-6">
                    <x-app.button type="submit" class="!mx-0">Je m'inscris</x-app.button>
                </div>
            </form>
        </x-app.modal>

        @include('layouts.header')

        @if (isset($modal))
            {{ $modal }}
        @endif

        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </body>
</html>
