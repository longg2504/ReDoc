<div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
    <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" method="GET" action="">
        <div class="sm:flex items-center sm:mr-4">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Cột</label>
            <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto"
                name="search_type">

                @foreach ($searchFields as $item)
                    <option
                        {{ !empty($_GET['search_type']) ? ($_GET['search_type'] == $item['name'] ? 'selected' : '') : '' }}
                        value="{{ $item['name'] }}">{{ $item['label'] }}</option>
                @endforeach

            </select>
        </div>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Loại</label>
            <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" name='search_like'>
                @php
                    $searchLike = ['=', '<', '<=', '>', '>=', '!='];
                @endphp

                <option {{ @$_GET['search_like'] == 'like' ? 'selected' : '' }} value="like" selected>like</option>
                @foreach ($searchLike as $item)
                    <option {{ @$_GET['search_like'] == $item ? 'selected' : '' }} value="{{ $item }}">
                        {{ $item }}</option>
                @endforeach
            </select>
        </div>
        <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
            <label class="w-auto flex-none mr-2">Từ khóa</label>
            <input id="tabulator-html-filter-value" type="text" name="search"
                class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Tìm kiếm..."
                value="{{ !empty($_GET['search']) ? $_GET['search'] : '' }}">
        </div>
        <div class="mt-2 xl:mt-0">
            <button type="submit" class="btn btn-primary w-full sm:w-16">Go</button>
        </div>
    </form>
    <div class="mt-2 xl:mt-0">
        <button id="tabulator-html-filter-reset" type="submit"
            class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
    </div>
</div>
