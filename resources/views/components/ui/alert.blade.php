<div {{ $attributes->merge(['class' => 'flex items-center justify-between p-4 font-semibold ' . $typeClass()]) }}>
    <p>{{ $message }}</p>
    <button>&times;</button>
</div>
