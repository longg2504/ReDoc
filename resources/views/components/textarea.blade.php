<div class="input-form col-span-12 mt-4 {{ $errors->get($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
    <div class="mt-2">
        <textarea class="form-control" name="summary" spellcheck="false">{{ $value ?? '' }}</textarea>
    </div>
    @if (count($errors->get($name)))
        <div class="pristine-error text-theme-24 mt-2" style="">{{ join(' ', $errors->get($name)) }}</div>
    @endif
</div>
