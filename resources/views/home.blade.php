<x-app-layout>
    
    <div class="bg_img w-full h-screen lg:h-[120vh] hidden md:block opacity-90 blur-[1px] select-none pointer-events-none" style="background-image:url('{{ Storage::url('images/header.jpg') }}');"></div>
    <div class="bg_img w-full h-screen lg:h-[120vh] block md:hidden opacity-90 blur-[1px] select-none pointer-events-none" style="background-image:url('{{ Storage::url('images/header_2.jpg') }}');"></div>

    <!-- Home -->
    <section class="min-h-screen mb-6 lg:mb-12 grid content-center py-6 relative">
        <img src="{{ Storage::url('images/header_shadow.png') }}" class="shadow_bg select-none pointer-events-none hidden md:block">

        <x-app.container class="text-creme">
            <div class="relative z-20 drop-shadow-lg mt-10 text-center sm:text-left">
                <x-app.h1 class="animate active">Crossfit Heritage<br/>Plus d’excuses&nbsp;!</x-app.h1>
                <x-app.subtitle class="animate dd_10 active">Ta nouvelle salle de crossfit à Wavre.</x-app.subtitle>
                <x-app.subtitle class="animate dd_10 active">Rejoins-nous et transforme chaque défi en victoire.</x-app.subtitle>
                <div class="py-8 flex flex-wrap items-center justify-center sm:justify-start mt-3">
                    <x-app.talk class="mr-4">Déja convaincu ?</x-app.talk>
                    <img src="{{ Storage::url('images/arrow.png') }}" alt="" class="flex-none w-7 mr-4 relative -top-3 hidden sm:block select-none pointer-events-none">
                    <x-app.cta href="#" class="!mx-0 scroller" data-scroll="contact">Contacte-nous</x-app.cta>
                </div>
            </div>
            <div class="absolute bottom-3 left-0 text-center w-full opacity-80">
                <x-app.talk>Quoi, Quand et Ou ?</x-app.talk><br/>
                <img src="{{ Storage::url('images/scroll.gif') }}" alt="" class="inline-block mt-2 w-6 select-none pointer-events-none opacity-50 sm:opacity-100">
            </div>
        </x-app.container>
    </section>

    <!-- Crossfit -->
    <section class="min-h-screen my-6 lg:my-12 grid content-center py-6 relative into_scroll" data-scroll="crossfit" id="crossfit">
        <x-app.container class="text-creme">
            <div class="xl:flex">
                <div class="title xl:pr-24 py-6 text-center sm:text-left">
                    <x-app.h1>Crossfit</x-app.h1>
                    <x-app.subtitle class="text-blue">C'est quoi ?</x-app.subtitle>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-2 2xl:grid-cols-3 gap-1 sm:gap-3">
                    <div class="col-span-1 sm:border-l sm:border-creme py-6 sm:pl-10 pr-6 lg:pr-16">
                        <x-app.h2>Pour qui</x-app.h2>
                        <x-app.paragraph>Le CrossFit est accessible à tous. Peu importe ton niveau ou ton expérience, tu peux te lancer.</x-app.paragraph> 
                        <x-app.paragraph>Que tu sois un(e) débutant(e) cherchant à bouger ou un(e) athlète désirant se dépasser, le CrossFit s'adapte à toi.</x-app.paragraph>
                        <x-app.paragraph>L’important, c’est d’avoir l’envie de progresser.</x-app.paragraph>
                        <x-app.paragraph>Avec le soutien d’une communauté dynamique, tu seras motivé(e) à chaque étape de ton parcours.</x-app.paragraph>
                    </div>
                    <div class="col-span-1 sm:border-l sm:border-creme py-6 sm:pl-10 pr-6 lg:pr-16">
                        <x-app.h2>Pour quoi</x-app.h2>
                        <x-app.paragraph>Le CrossFit, c’est le choix idéal pour se renforcer, se tonifier et gagner en endurance.</x-app.paragraph> 
                        <x-app.paragraph>Chaque séance est unique, ce&nbsp;qui évite la routine et maintient ta motivation.</x-app.paragraph>
                        <x-app.paragraph>Rapidement, tu verras des résultats concrets, tant sur le plan physique que mental. </x-app.paragraph>
                        <x-app.paragraph>Cela te pousse également à sortir de ta zone de confort et à révéler la meilleure version de toi-même.</x-app.paragraph>
                    </div>
                    <div class="col-span-1 sm:border-l sm:border-creme py-6 sm:pl-10 pr-6 lg:pr-16">
                        <x-app.h2>Comment</x-app.h2>
                        <x-app.paragraph>Les entraînements se font en petits groupes, sous la supervision d’un coach qui te guide pas à pas. </x-app.paragraph> 
                        <x-app.paragraph>Chaque séance commence par un échauffement, puis enchaîne avec la révision des mouvements du WOD (haltérophilie, cardio, gymnastique,...) et se termine par le WOD en lui-même.</x-app.paragraph>
                        <x-app.paragraph>Les WODs (Workout of the Day) sont adaptés à ton niveau, mais te challengeront sans cesse. </x-app.paragraph>
                    </div>
                </div>
            </div>
        </x-app.container>
    </section>

    <!-- Center text -->
    <section class="min-h-[60vh] my-12 lg:my-24 grid content-center py-6 relative">
        <img src="{{ Storage::url('images/purple_bg.jpg') }}" class="purple_bg opacity-90 blur-[1.5px] select-none pointer-events-none">
        <x-app.container class="-skew-y-6 text-center">
            <div class="title text-center relative z-20 py-6 sm:py-12">
                <x-app.h1 class="text-creme">The&nbsp;only bad&nbsp;workout</x-app.h1>
                <p class="text-pink font-sans uppercase mt-3 text-2xl lg:text-4xl">is the one that didn’t happen</p>
                <div class="inline-block bg-burgundy opacity-15 w-full h-full absolute top-0 left-0 z-10"></div>
            </div>
            <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="inline-block relative z-20 w-11 md:w-12 lg:w-16 xl:w-20 skew-y-6 -top-6 select-none pointer-events-none">
        </x-app.container>
    </section>

    <!-- Heritage -->
    <section class="min-h-screen my-6 lg:my-12 grid content-center py-6 relative into_scroll" data-scroll="vision" id="vision">
        <x-app.container>
            <div class="title text-center sm:text-left py-6">
                <x-app.h1 class="text-creme">HERITAGE</x-app.h1>
                <x-app.subtitle class="text-blue">& Essentiel</x-app.subtitle>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-7 lg:gap-14 mt-4 lg:mt-10 pr-0 xl:pr-16 items-stretch">
                <div class="col-span-1 sm:col-span-2 xl:col-span-1 bg-creme px-6 py-5 md:px-10 md:py-6 lg:px-14 lg:py-8">
                    <x-app.h2 class="text-burgundy">Notre vision</x-app.h2>
                    <x-app.paragraph>Le CrossFit, c’est des mouvements fonctionnels, ceux qu’on fait tous les jours sans même y penser (courir, bouger, s'asseoir, porter ...).</x-app.paragraph>
                    <x-app.paragraph>L’idée d’"Heritage" vient de là : mettre en avant tout ce que notre corps est capable de faire, même si on ne l’utilise pas toujours comme on le devrait dans notre vie souvent trop sédentaire.</x-app.paragraph> 
                    <x-app.paragraph class="xl:mb-12">Sans oublier l’importance de la communauté et du partage. On veut mettre en avant les relations humaines qui durent dans le temps, notre véritable héritage.</x-app.paragraph> 
                </div>
                <div class="col-span-1 bg-creme px-6 py-5 md:px-10 md:py-6 lg:px-10 lg:py-8 text-left sm:text-right relative ">
                    <x-app.h2 class="text-burgundy">Michael</x-app.h2>
                    <p class="text-burgundy font-sans mt-2 text-sm md:text-[0.9rem] sm:max-w-[240px] inline-block">
                        <span class="font-bold">Co-owner, Coach (lvl2)</span><br/>
                        Master Education Physique<br/><br/>
                        Après 10 ans de natation compétitive, j’ai découvert le CrossFit en 2016 et en ai fait mon métier depuis 6 ans.<br/><br/>
                        <span class="underline">Love</span> : Handstand walk<br/>
                        <span class="underline">Hate</span> : Run
                    </p>
                    <img src="{{ Storage::url('images/mike.png') }}" alt="" class="absolute bottom-0 select-none pointer-events-none z-20 w-[40%] xl:w-3/5 -left-10 hidden md:inline-block">
                </div>
                <div class="col-span-1 bg-creme px-6 py-5 md:px-10 md:py-6 lg:px-10 lg:py-8 text-left relative">
                    <x-app.h2 class="text-burgundy">Gérome</x-app.h2>
                    <p class="text-burgundy font-sans mt-2 text-sm md:text-[0.9rem] sm:max-w-[240px] inline-block">
                        <span class="font-bold">Co-owner, Coach (lvl2)</span><br/><br/>
                        Ayant découvert et appris la pratique du CrossFit grâce à un ami kiné il y a presque 10 ans déjà, l’adaptation aux besoins de chacun et la sécurité sont deux éléments essentiels dans ma vision du coaching.<br/><br/>
                        <span class="underline">Love</span> : Dumbell snatch<br/>
                        <span class="underline">Hate</span> : Cross-over
                    </p>
                    <img src="{{ Storage::url('images/gerome.png') }}" alt="" class="absolute bottom-0 select-none pointer-events-none z-20 w-[50%] xl:w-[72%] -right-11 hidden md:inline-block ">
                </div>
            </div>
        </x-app.container>
    </section>

    <!-- LA Box -->
    <section class="min-h-screen my-6 lg:my-12 grid content-center py-6 relative into_scroll" data-scroll="lieu" id="lieu">
        <x-app.container>
            <div class="title xl:pr-24 py-6 text-center sm:text-left">
                <x-app.h1 class="text-creme">La box</x-app.h1>
                <x-app.subtitle class="text-pink">et son horaire</x-app.subtitle>
            </div>
            <div class="mt-4 lg:mt-10 text-right relative block lg:flex xl:block">
                <div class="inline-block w-full lg:w-1/2 px-6 py-5 md:px-10 md:py-6 lg:px-14 lg:py-8 xl:py-12 bg-creme text-left relative z-20 border_radius_box my-0 xl:my-16">
                    <x-app.paragraph class="!mt-0">Nous sommes ouverts depuis le 2 septembre 2024.<br/>Qu’attends-tu pour <span class="font-bold">passer nous voir</span> ?</x-app.paragraph> 
                    <x-app.paragraph>La box est située à Wavre, <span class="font-bold">Chaussée de Louvain 473, 1300 Wavre</span></x-app.paragraph> 
                    <x-app.paragraph><span class="font-bold">Contacte-nous</span> pour plus d’informations ou viens directement nous rendre visite. Vérifie les horaires pour éviter de tomber en plein cours.</x-app.paragraph> 
                    <x-app.cta href="#" class="!mx-0 mt-3">Consulter l'horaire</x-app.cta>
                </div>
                <img src="{{ Storage::url('images/salle.jpg') }}" alt="" class="relative xl:absolute top-0 left-0 select-none pointer-events-none z-10 w-full lg:w-1/2 xl:w-auto h-full mt-0 lg:mt-12 xl:mt-0">
                </div>
            <div class="w-full text-center">
                <img src="{{ Storage::url('images/plan.png') }}" alt="" class="inline-block relative lg:-top-14 select-none pointer-events-none z-0 w-full lg:w-1/2">
            </div>
        </x-app.container>
    </section>

    <!-- Center texte 2 -->
    <section class="min-h-[60vh] my-12 lg:my-24 grid content-center py-6 relative">
        <img src="{{ Storage::url('images/purple_bg.jpg') }}" class="purple_bg opacity-90 blur-[1.5px] select-none pointer-events-none">
        <x-app.container class="-skew-y-6 text-center">
            <div class="relative z-20 py-12">
                <x-app.h1 class="text-creme">The pain you feel&nbsp;today</x-app.h1>
                <p class="text-blue font-sans uppercase mt-3 text-2xl lg:text-4xl">will be the strength you feel&nbsp;tomorrow</p>
                <div class="inline-block bg-burgundy opacity-15 w-full h-full absolute top-0 left-0 z-10"></div>
            </div>
            <img src="{{ Storage::url('images/logo.svg') }}" alt="" class="inline-block relative z-20 w-11 md:w-12 lg:w-16 xl:w-20 skew-y-6 -top-6 select-none pointer-events-none">
        </x-app.container>
    </section>

    <!-- Les Formules -->
    <section class="min-h-screen my-6 lg:my-12 grid content-center py-6 relative into_scroll" data-scroll="formules" id="formules">
        <x-app.container>
            <div class="title text-center sm:text-left py-6">
                <x-app.h1 class="text-creme">Formules</x-app.h1>
                <x-app.subtitle class="text-blue">Pour tous</x-app.subtitle>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3 md:gap-7 lg:gap-14 mt-4 lg:mt-10 pr-0 xl:pr-16 items-stretch">
                <div class="col-span-1 bg-creme text-burgundy px-6 py-5 md:px-10 md:py-6 lg:px-14 lg:py-8 border_radius_box">
                    <x-app.h3>Pack classic</x-app.h3>
                    <x-app.paragraph>Pas de durée d’engagement*<br/><i class="text-sm">* 1 mois de préavis en cas résiliation</i></x-app.paragraph>
                    <x-app.paragraph class="font-bold">Wod 1x/jour</x-app.paragraph>
                    <x-app.paragraph class="line-through">Accès illimité à la salle lors des horaires "FreeAccess"</x-app.paragraph>
                    <x-app.paragraph class="line-through">Suprise - Coming Soon</x-app.paragraph>
                    <!-- <x-app.paragraph class="underline">En savoir plus ?</x-app.paragraph> -->
                </div>
                <div class="col-span-1 bg-burgundy border-[3px] md:border-[6px] border-creme text-creme px-6 py-5 md:px-10 md:py-6 lg:px-14 lg:py-8 border_radius_box">
                    <x-app.h3>Classic & free&nbsp;access</x-app.h3>
                    <x-app.paragraph>Pas de durée d’engagement*<br/><i class="text-sm">* 1 mois de préavis en cas résiliation</i></x-app.paragraph>
                    <x-app.paragraph>Wod 1x/jour</x-app.paragraph>
                    <x-app.paragraph class="font-bold">Accès illimité à la salle lors des horaires "FreeAccess"</x-app.paragraph>
                    <x-app.paragraph class="line-through">Suprise - Coming Soon</x-app.paragraph>
                    <!-- <x-app.paragraph class="underline">En savoir plus ?</x-app.paragraph> -->
                </div>
                <div class="col-span-1 bg-burgundy border-[3px] md:border-[6px] border-creme text-creme px-6 py-5 md:px-10 md:py-6 lg:px-14 lg:py-8 border_radius_box">
                    <x-app.h3>Pack surprise</x-app.h3>
                    <x-app.paragraph>Pas de durée d’engagement*<br/><i class="text-sm">* 1 mois de préavis en cas résiliation</i></x-app.paragraph>
                    <x-app.paragraph>Wod 1x/jour</x-app.paragraph>
                    <x-app.paragraph>Accès illimité à la salle lors des horaires "FreeAccess"</x-app.paragraph>
                    <x-app.paragraph class="font-bold">Suprise - Coming Soon</x-app.paragraph>
                    <!-- <x-app.paragraph class="underline">En savoir plus ?</x-app.paragraph> -->
                </div>
            </div>
        </x-app.container>
    </section>

    @vite(['resources/js/main.js'])
</x-app-layout>
