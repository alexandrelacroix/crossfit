<footer class="relative bg-creme text-burgundy border_radius_box border_footer">
    <x-app.container class="flex py-20">
        <div>
            <a href="#" class="flex">
                <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="w-11 md:w-12 lg:w-16 xl:w-20 mr-0 lg:mr-3">
                <div class="flex sm:hidden md:flex mx-4 md:mx-5 lg:mx-6 items-center">
                    <img src="{{ Storage::url('images/heritage.svg') }}" alt="" class="w-36 lg:w-44">
                    <span class="w-1 h-6 rounded-full bg-pink mx-3 flex-none hidden lg:block"></span>
                    <img src="{{ Storage::url('images/crossfit.svg') }}" alt="" class="w-20 lg:w-24 hidden lg:block">
                </div>
            </a> 
            <div class="text-center">
                <x-app.paragraph>Chaussée de Louvain 473, 1300 Wavre<br/>info@crossfitheritage.be<br/>0475686514</x-app.paragraph>
                <div class="flex justify-center">
                    <a href="#" class="block w-10 h-10 bg-blue">A</a>
                    <a href="#" class="block w-10 h-10 bg-blue">A</a>
                    <a href="#" class="block w-10 h-10 bg-blue">A</a>
                    <a href="#" class="block w-10 h-10 bg-blue">A</a>
                </div>
            </div>
        </div>

        <div>
            <form action="">
                <x-app.h2>Contacte-nous !</x-app.h2>
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-1">
                        <label for="fname" class="w-full">Nom</label>
                        <input type="text" id="fname" name="fname" placeholder="nom" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="fname" class="w-full">Nom</label>
                        <input type="text" id="fname" name="fname" placeholder="nom" class="w-full">
                    </div>
                    <div class="col-span-1">
                        <label for="fname" class="w-full">Nom</label>
                        <input type="text" id="fname" name="fname" placeholder="nom" class="w-full">
                    </div>
                    <div class="col-span-3">
                        <label for="fname" class="w-full">Nom</label>
                        <input type="text" id="fname" name="fname" placeholder="nom" class="w-full">
                    </div>
                </div>
            </form>
        </div>
    </x-app.container>
</footer>