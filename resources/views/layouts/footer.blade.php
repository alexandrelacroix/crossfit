<footer class="relative bg-creme text-burgundy">

    <a href="#" class="flex">
        <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="w-11 md:w-12 lg:w-16 xl:w-20 mr-0 lg:mr-3">
        <div class="flex sm:hidden md:flex mx-4 md:mx-5 lg:mx-6 items-center">
            <img src="{{ Storage::url('images/heritage.svg') }}" alt="" class="w-36 lg:w-44">
            <span class="w-1 h-6 rounded-full bg-pink mx-3 flex-none hidden lg:block"></span>
            <img src="{{ Storage::url('images/crossfit.svg') }}" alt="" class="w-20 lg:w-24 hidden lg:block">
        </div>
    </a>    

    <x-app.h1>Crossfit Heritage</x-app.h1>
    <x-app.subtitle>Ta nouvelle salle de crossfit à Wavre.</x-app.subtitle>

    <x-app.h2>Pour qui</x-app.h2>
    <x-app.paragraph>Le CrossFit est accessible à tous. Peu importe ton niveau ou ton expérience, tu peux te lancer.</x-app.paragraph> 
    <img src="{{ Storage::url('images/arrow.png') }}" alt="" class="flex-none w-7 mr-4 relative -top-3 hidden sm:block select-none pointer-events-none">
    
</footer>