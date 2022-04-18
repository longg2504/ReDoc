<td>
    @if (isset($item->{$itemField['data_source']}->{$itemField['name']}))
        {{ $item->{$itemField['data_source']}->{$itemField['name']} }}
    @else
        @if (isset($item->{$itemField['data_source']}()->first()->{$itemField['name']}))
            {{ $item->{$itemField['data_source']}()->first()->{$itemField['name']} }}
        @endif
    @endif
</td>
