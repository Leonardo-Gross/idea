@props(['name', 'label', 'type' => 'text'])

<div class="space-y-2">
    <label class="label flex justify-start" for="{{ $name }}">{{ $label }}</label>

    <input class="input" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" {{ $attributes }}>

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>
