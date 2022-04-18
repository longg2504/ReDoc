<div class="input-form col-span-12 {{ $errors->get($name) ? 'has-error' : '' }} mt-4">
    <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
    <input type="password" id="{{ $name }}" name="{{ $name }}"
        value="" placeholder="{{ $placeholder }}" class="form-control"
        required>
    @if (count($errors->get($name)))
        <div class="pristine-error text-theme-24 mt-2" style="">{{ join(' ', $errors->get($name)) }}</div>
    @endif
</div>
