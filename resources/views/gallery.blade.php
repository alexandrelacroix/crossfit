<x-app-layout>
    <div class="bg_img w-full h-screen lg:h-[120vh] opacity-90 blur-[1px] select-none pointer-events-none" style="background-image:url('{{ Storage::url('images/inauguration/inauguration.jpg') }}');"></div>

    <!-- Homge -->
    <section class="min-h-screen mb-6 lg:mb-12 grid content-center py-6 relative">
        <img src="{{ Storage::url('images/header_shadow.png') }}" class="shadow_bg select-none pointer-events-none hidden md:block">

        <x-app.container class="text-creme">
            <div class="relative z-20 drop-shadow-lg mt-10 text-center sm:text-left">
                <x-app.h1>Les photos<br/>de l'inauguration</x-app.h1>
                <x-app.subtitle>Retrouves ici toutes les photos de l'inauguration.</x-app.subtitle>
            </div>
            <div class="absolute bottom-3 left-0 text-center w-full opacity-80">
                <x-app.talk>Viens voir ça !</x-app.talk><br/>
                <img src="{{ Storage::url('images/scroll.svg') }}" alt="" class="inline-block mt-2 w-6 select-none pointer-events-none opacity-50 sm:opacity-100">
            </div>
        </x-app.container>
    </section>

    <!-- Heritage -->
    <section class="min-h-screen my-6 lg:my-12 grid content-center py-6 relative">
        <x-app.container>
            <div class="grid grid-cols-4 gap-7" id="gallery">
                <a href="{{ Storage::url('images/inauguration/1.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/1.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/2.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/2.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/3.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/3.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/4.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/4.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/5.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/5.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/1.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/1.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/2.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/2.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/3.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/3.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/4.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/4.jpg') }}" alt="" class="select-none pointer-events-none"></a>
                <a href="{{ Storage::url('images/inauguration/5.jpg') }}" class="col-span-1" data-pswp-width="1366" data-pswp-height="768"><img src="{{ Storage::url('images/inauguration/5.jpg') }}" alt="" class="select-none pointer-events-none"></a>
            </div>
        </x-app.container>
    </section>

    @vite(['resources/js/main.js'])

    <script type="module">
        import PhotoSwipeLightbox from 'http://[::1]:5173//resources/js/photoswipe-lightbox.esm.min.js';

        const lightbox = new PhotoSwipeLightbox({
            gallery: '#gallery',
            children: 'a',
            pswpModule: () => import('http://[::1]:5173/resources/js/photoswipe.esm.min.js')
        });

        lightbox.init();
    </script>
</x-app-layout>
