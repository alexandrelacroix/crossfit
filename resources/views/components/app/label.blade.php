<label {{ $attributes->merge(['class' => 'text-xs md:text-sm lg:text-base block mb-2 md:mb-3']) }}>
    {{ $value ?? $slot }}
</label>
