<td>
    @isset($item->{$itemField['data_source']})
    <img style="max-width: 100px"
        src="{{ \App\Helper\Common::getImage($item->{$itemField['data_source']}->{$itemField['name']}, 'thumb', $folderUpload) }}"
        alt="{{ $item->{$itemField['name']} }}">
    @endisset
</td>
