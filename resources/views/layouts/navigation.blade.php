<nav class="absolute t-0 left-0 w-full bg-slate-700">

    <x-app.container class="flex justify-between">
        <div class="">
            <a href="#">Logo</a>
        </div>
        <div class="">
            <a href="#">CrossFit</a>
            <a href="#">Histoire</a>
            <a href="#">Lieu</a>
            <a href="#">Formules</a>
            <a href="#">Contact</a>
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