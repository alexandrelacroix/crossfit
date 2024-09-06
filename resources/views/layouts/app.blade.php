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
        <meta property="og:url" content="https://repico.wavre.be/voirie"/>
        <meta property="og:image" content="https://repico.wavre.be/storage/images/voirie/share.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1280" />
        <meta property="og:image:height" content="567" />
        <meta property="og:image:alt" content="CrossFit Heritage" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        @vite(['resources/css/app.css', 'resources/sass/app.sass', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans antialiased relative">
        @include('layouts.navigation')

        @if (isset($modal))
            {{ $modal }}
        @endif

        <main>
            {{ $slot }}
        </main>
    </body>
</html>
