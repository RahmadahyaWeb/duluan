@props([
    'label' => null,
    'name',
    'type' => 'text',
    'value' => '',
    'placeholder' => '',
    'size' => null,
])

@php
    $id = $attributes->get('id') ?? $name;
    $class = 'form-control';

    if ($size) {
        $class .= " form-control-$size";
    }

    if ($errors->has($name)) {
        $class .= ' is-invalid';
    }
@endphp

<div class="form-group basic">
    <div class="input-wrapper">
        @if ($label)
            <label class="label" for="{{ $id }}">{{ $label }}</label>
        @endif

        <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}"
            placeholder="{{ $placeholder }}" value="{{ old($name, $value) }}"
            {{ $attributes->merge(['class' => $class]) }}>

        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
