@php

if (is_array($selects)) {
    $data = $selects;
    $type = 'array';
} else {
    try {
        $data = $selects->select('id', 'name')->get();
    } catch (\Exception $e) {
        $data = $selects->select('id', 'title')->get();
    }
    $type = 'object';
}
@endphp

<div class="input-form col-span-12 mt-4">
    <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
    <div class="mt-2" id="categories">
        <select data-placeholder="Chọn danh mục" class="tom-select w-full" name="{{ $name }}">
            <option value="">Chọn {{ $label }}</option>
            @if ($type == 'object')
                @if (!empty($data))
                    @foreach ($data as $item)
                        <option value="{{ $item->id }}"
                            {{ !empty($value) ? ($value == $item->id ? 'selected' : '') : (old($name) == "$item->id" ? 'selected' : '') }}>
                            {{ $item->name ? $item->name : $item->title }}
                        </option>
                    @endforeach
                @endif
            @else
                @if (!empty($data))
                    @foreach ($data as $key => $item)
                        <option value="{{ $key }}"
                            {{ !empty($value) ? ($value == $key ? 'selected' : '') : (old($name) == "$key" ? 'selected' : '') }}>
                            {{ $item }}
                        </option>
                    @endforeach
                @endif
            @endif
        </select>
    </div>

    @if (count($errors->get($name)))
        <div class="pristine-error text-theme-24 mt-2" style="">{{ join(' ', $errors->get($name)) }}</div>
    @endif
</div>
