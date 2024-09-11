<div {{ $attributes->merge(['class' => 'w-screen h-screen fixed top-0 left-0 modal flex items-center justify-center px-6 py-10 md:px-20 md:py-40']) }}>
    <div class="bg-burgundy opacity-80 cursor-pointer w-full h-full absolute top-0 left-0 z-0 close_modal"></div>
    <div class="bg-creme h-auto max-h-full max-w-[940px] border_radius_box relative z-10 overflow-y-auto">
        <div class="absolute top-1 right-1 px-2 py-1 text-sm border_radius_box_lite text-creme close_modal bg-burgundy cursor-pointer">Fermer</div>
        <div class="py-10 px-10 md:py-20 md:px-20">
            {{ $slot }}
        </div>
    </div>
</div>