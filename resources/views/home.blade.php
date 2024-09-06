<x-app-layout>
    <div class="bg_img w-full h-screen lg:h-[120vh] hidden md:block" style="background-image:url('{{ Storage::url('images/header.jpg') }}');"></div>
    <div class="bg_img w-full h-screen lg:h-[120vh] block md:hidden" style="background-image:url('{{ Storage::url('images/header_2.jpg') }}');"></div>

    <section class="min-h-screen grid content-center py-6 relative">
        <!-- <div class="shadow_bg bg-cover lg:bg-contain w-full xl:w-[60vw] opacity-40" style="background-image:url('{{ Storage::url('images/header_shadow.png') }}');"></div> -->
        <x-app.container class="text-creme">
            <div class="relative z-20 drop-shadow-lg mt-10">
                <x-app.h1>Crossfit Heritage<br/>Plus d’excuses&nbsp;!</x-app.h1>
                <x-app.subtitle>Ta nouvelle salle de crossfit à Wavre.</x-app.subtitle>
                <x-app.subtitle>Rejoins-nous et transforme chaque défi en victoire.</x-app.subtitle>
                <div class="py-8 flex flex-wrap items-center justify-center sm:justify-start">
                    <x-app.talk>Déja convaincu ?</x-app.talk>
                    <img src="{{ Storage::url('images/arrow.png') }}" alt="" class="flex-none w-7 ml-4 relative -top-3 hidden sm:block">
                    <x-app.cta href="#">Contacte-nous</x-app.cta>
                </div>
            </div>
            <div class="absolute bottom-3 left-0 text-center w-full">
                <x-app.talk>Quoi, Quand et Ou ?</x-app.talk><br/>
                <img src="{{ Storage::url('images/scroll.svg') }}" alt="" class="inline-block mt-2 w-6">
            </div>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container class="text-creme py-40">
            <div class="flex">
                <div class="title pr-24 py-6">
                    <x-app.h1>Crossfit</x-app.h1>
                    <x-app.subtitle class="text-blue">C'est quoi ?</x-app.subtitle>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    <div class="col-span-1 pl-10 pr-16 border-l border-creme py-6">
                        <x-app.h2>Pour qui</x-app.h2>
                        <x-app.paragraph>Le CrossFit est accessible à tous. Peu importe ton niveau ou ton expérience, tu peux te lancer.</x-app.paragraph> 
                        <x-app.paragraph>Que tu sois un(e) débutant(e) cherchant à bouger ou un(e) athlète désirant se dépasser, le CrossFit s'adapte à toi.</x-app.paragraph>
                        <x-app.paragraph>L’important, c’est d’avoir l’envie de progresser.</x-app.paragraph>
                        <x-app.paragraph>Avec le soutien d’une communauté dynamique, tu seras motivé(e) à chaque étape de ton parcours.</x-app.paragraph>
                    </div>
                    <div class="col-span-1 pl-10 pr-16 border-l border-creme py-6">
                        <x-app.h2>Pour quoi</x-app.h2>
                        <x-app.paragraph>Le CrossFit, c’est le choix idéal pour se renforcer, se tonifier et gagner en endurance.</x-app.paragraph> 
                        <x-app.paragraph>Chaque séance est unique, ce&nbsp;qui évite la routine et maintient ta motivation.</x-app.paragraph>
                        <x-app.paragraph>Rapidement, tu verras des résultats concrets, tant sur le plan physique que mental. </x-app.paragraph>
                        <x-app.paragraph>Cela te pousse également à sortir de ta zone de confort et à révéler la meilleure version de toi-même.</x-app.paragraph>
                    </div>
                    <div class="col-span-1 pl-10 pr-16 border-l border-creme py-6">
                        <x-app.h2>Comment</x-app.h2>
                        <x-app.paragraph>Les entraînements se font en petits groupes, sous la supervision d’un coach qui te guide pas à pas. </x-app.paragraph> 
                        <x-app.paragraph>Chaque séance commence par un échauffement, puis enchaîne avec la révision des mouvements du WOD (haltérophilie, cardio, gymnastique,...) et se termine par le WOD en lui-même.</x-app.paragraph>
                        <x-app.paragraph>Les WODs (Workout of the Day) sont adaptés à ton niveau, mais te challengeront sans cesse. </x-app.paragraph>
                    </div>
                </div>
            </div>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container>
            <x-app.h1>The only bad workout</x-app.h1>
            <x-app.subtitle class="text-pink">is the one that didn’t happen</x-app.subtitle>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container>
            <x-app.h1>HERITAGE</x-app.h1>
            <x-app.subtitle class="text-blue">& Essentiel</x-app.subtitle>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container>
            <x-app.h1>La box</x-app.h1>
            <x-app.subtitle class="text-pink">et son horaire</x-app.subtitle>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container>
            <x-app.h1>The pain you feel today</x-app.h1>
            <x-app.subtitle class="text-pink">will be the strength you feel tomorrow</x-app.subtitle>
        </x-app.container>
    </section>

    <section class="min-h-screen grid content-center py-6 relative">
        <x-app.container>
            <x-app.h1>Formules</x-app.h1>
            <x-app.subtitle class="text-blue">Pour tous</x-app.subtitle>
        </x-app.container>
    </section>

    @vite(['resources/js/main.js'])
</x-app-layout>
