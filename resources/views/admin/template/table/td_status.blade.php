<td>
    @if (isset($item->status))
        @switch($item->status)
            @case(2)
                <span class="badge badge-success">Success</span>
            @break
            @case(1)
                <span class="badge badge-danger">Cancel</span>
            @break
            @case(0)
                <span class="badge badge-warning">Pending</span>
            @break
        @endswitch
    @endif
</td>
