<nav class="absolute t-0 left-0 w-full z-50">

    <x-app.container class="nav flex justify-center sm:justify-between items-center pt-4 md:pt-6 lg:pt-10 relative">
        <a href="#" class="flex">
            <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="w-11 md:w-12 lg:w-16 xl:w-20 mr-0 lg:mr-3">
            <div class="flex sm:hidden md:flex mx-4 md:mx-5 lg:mx-6 items-center">
                <img src="{{ Storage::url('images/heritage.svg') }}" alt="" class="w-36 lg:w-44">
                <span class="w-1 h-6 rounded-full bg-pink mx-3 flex-none hidden lg:block"></span>
                <img src="{{ Storage::url('images/crossfit.svg') }}" alt="" class="w-20 lg:w-24 hidden lg:block">
            </div>
        </a>

        <div class="hidden sm:flex sm:flex-wrap">
            <a href="#" class="text-base text-white px-4 py-2 lg:px-5 lg:py-3 xl:px-6 xl:py-4 nav_link active">CrossFit</a>
            <a href="#" class="text-base text-white px-4 py-2 lg:px-5 lg:py-3 xl:px-6 xl:py-4 nav_link">Histoire</a>
            <a href="#" class="text-base text-white px-4 py-2 lg:px-5 lg:py-3 xl:px-6 xl:py-4 nav_link">Lieu</a>
            <a href="#" class="text-base text-white px-4 py-2 lg:px-5 lg:py-3 xl:px-6 xl:py-4 nav_link">Formules</a>
            <a href="#" class="text-base text-white px-4 py-2 lg:px-5 lg:py-3 xl:px-6 xl:py-4 nav_link">Contact</a>
        </div>
        
    </x-app.container>
    
    <div class="shadow_nav h-36 lg:h-48 opacity-30" style="background-image:url('{{ Storage::url('images/menu_shadow.png') }}');"></div>

    @if (request()->routeIs('edit'))
        <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
            {{ __('profile') }}
        </x-nav-link>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    @endif
</nav>