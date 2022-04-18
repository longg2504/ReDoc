<div class="form-check flex-col items-start mt-3">
    <label for="post-form-5" class="form-check-label ml-0 mb-2">Tình Trạng</label>
    <input id="status-change" name="active" class="form-check-switch" value="{{ isset($active) ? $active : 0 }}"
        type="checkbox" {{ isset($active) ? "checked" : "" }}>
</div>
