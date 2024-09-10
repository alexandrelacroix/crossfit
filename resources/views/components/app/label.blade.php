<label {{ $attributes->merge(['class' => 'block mb-3']) }}>
    {{ $value ?? $slot }}
</label>
