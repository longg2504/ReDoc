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
                    // dd($item->roles()->pluck('name'));
                    $id = $item->id;
                    // dd($item);
                    // dd($item->media->name);
                    // print_r($item->media);
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
                            @case('thumb')
                                @include ("admin.template.table.td_thumb")
                            @break
                            @case('active')
                                @include ("admin.template.table.td_active")
                            @break
                            @case('in_array')
                                @include ("admin.template.table.td_in_array")
                            @break
                            @case('money')
                                @include ("admin.template.table.td_money")
                            @break
                            @case('button')
                                @include ("admin.template.table.td_button")
                            @break
                            @case('setting_value')
                                <td>
                                    @if ($item->type == 1)
                                        {{ $item->setting_value }}
                                    @elseif ($item->type == 2)
                                        {{ $item->setting_value }}
                                    @else
                                    <img style="max-width: 100px" src="{{ \App\Helper\Common::getImage($item->setting_value, 'media', '') }}" alt="">
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
