<table class="table card-table table-vcenter text-nowrap" id="data-table">
    <thead>
        <tr>
            @foreach ($listFields as $k => $itemField)
                <th>{{ $itemField['label'] }}</th>
            @endforeach
            @if (Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.update')) ||
    Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.delete')))
                <th>ACTION</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @if ($data->count() > 0)
            @foreach ($data as $k => $item)
                @php
                    $id = $item->id;
                    // dd($listFields);
                @endphp
                <tr>
                    @foreach ($listFields as $k => $itemField)
                        @switch ($itemField['type'])
                            @case('text')
                                @include ("admin.template.table.td_text")
                            @break
                            @case('textarea')
                                @include ("admin.template.table.td_textarea")
                            @break
                            @case('text_foreign_key')
                                @include ("admin.template.table.td_text_foreign_key")
                            @break
                            @case('object')
                                @include ("admin.template.table.td_object")
                            @break
                            @case('file')
                                @include ("admin.template.table.td_thumb")
                            @break
                            {{-- @case('active')
                                @include ("admin.template.table.td_active")
                            @break --}}
                            @case('in_array')
                                @include ("admin.template.table.td_in_array")
                            @break
                            @case('money')
                                @include ("admin.template.table.td_money")
                            @break
                            @case('button')
                                @include ("admin.template.table.td_button")
                            @break
                            @case('status')
                                @include ("admin.template.table.td_status")
                            @break
                            @case('role')
                                <td>
                                    {{ $item->roles->pluck('name')[0] }}
                                </td>
                            @break
                            @case('active')
                            <td>
                                @if ($item->active == 1)
                                    <a class="btn btn-success">active</a>
                                @else
                                    <a class="btn btn-danger">deactive</a>
                                @endif
                            </td>
                        @break
                        @case('is_coming_soon')
                            <td>
                                @if ($item->is_coming_soon == 1)
                                    <a class="btn btn-success">Yes</a>
                                @else
                                    <a class="btn btn-danger">No</a>
                                @endif
                            </td>
                        @break
                        @endswitch
                    @endforeach
                    @if (Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.update')) ||
    Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.delete')))
                        <td>@include("admin.template.action")</td>

                    @endif
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
