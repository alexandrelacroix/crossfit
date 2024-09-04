<nav class="absolute t-0 left-0 w-full z-50">

    <x-app.container class="flex justify-between items-center pt-12">
        <a href="#" class="flex items-center">
            <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="w-20 mr-6">
            <div class="flex mx-6 items-center">
                <img src="{{ Storage::url('images/heritage.svg') }}" alt="" class="w-44">
                <span class="w-1 h-6 rounded-full bg-pink mx-3"></span>
                <img src="{{ Storage::url('images/crossfit.svg') }}" alt="" class="w-24">
            </div>
        </a>

        <div class="flex">
            <a href="#" class="text-base text-white px-6 py-4 nav_link active">CrossFit</a>
            <a href="#" class="text-base text-white px-6 py-4 nav_link">Histoire</a>
            <a href="#" class="text-base text-white px-6 py-4 nav_link">Lieu</a>
            <a href="#" class="text-base text-white px-6 py-4 nav_link">Formules</a>
            <a href="#" class="text-base text-white px-6 py-4 nav_link">Contact</a>
        </div>
    </x-app.container>

    @if (request()->routeIs('edit'))
        <!-- <x-nav-link :href="route('edit')" :active="request()->routeIs('edit')">
            {{ __('edit') }}
        </x-nav-link> -->

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    @endif
</nav>