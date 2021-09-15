@php
$errorName = Str::contains($name, '[') ? str_replace(['[', ']'], ['.', ''], $name) : $name;
@endphp

<div {{ $attributes->merge(['class' => '']) }}>
    <label class="block text-gray-700">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}"
           name="{{ $name }}"
           value="{{ old($errorName) }}"
           class="w-full text-gray-600 mt-2 p-2 border border-gray-200 focus:outline-none focus:border-purple-300 rounded">

    @error($errorName)
        <span class="text-red-500 text-sm italic">{{ $message }}</span>
    @enderror
</div>
