<div class="form-check flex-col items-start mt-3">
    <label for="post-form" class="form-check-label ml-0 mb-2">{{ $label }}</label>
    <input id="post-form" class="form-check-switch" type="checkbox" value="1" name="{{ $name }}"
        {{ isset($value) ? ($value == 1 ? 'checked' : '') : 'checked' }}>
</div>
