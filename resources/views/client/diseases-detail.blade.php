@extends('client.layout.index')
@section('content')
    <style>
        .no-padding {
            padding: 0 !important;
        }

        .add-padding {
            padding: .625em 2em;
            # padding as you need according your styles display: inline-block;
        }

        a {
            text-decoration: none !important;
        }

        .breadcrumb {
            margin: 0 -15px;
        }

    </style>
    <div class="breadcrumb mt-4"><label class="font-weight-600">Chi tiết về bệnh</label>
        <span>{{ ' > ' . $disease->name }}</span>
    </div>

    <div class="row bg-white">
        <div class="content col-xs-12 col-md-12 no-paddings-sm mt-1">
            <h3>{{ $disease->name }}</h3>
            <img src="{{ $disease->media->getMedia($disease->media, 'thumb') }}" alt="{{ $disease->name }}" class="img-fluid">
        </div>

        <div class="content col-xs-12 col-md-12 no-paddings-sm mt-1">
            <p>{!! $disease->description !!}</p>
        </div>

        <div class="content col-xs-12 col-md-12 no-paddings-sm mt-1">
            <h5>Triệu chứng</h5>
            <ul>
                @foreach ($symptoms as $symptom)
                    <li>{{ $symptom->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="content col-xs-8 col-md-8 no-paddings-sm mt-1">
            <h5>Đơn thuốc</h5>

            <table class="table m-auto">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên thuốc</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Liều lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prescription as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $item->medicines->name }}</td>
                            <td>
                                <img style="width: 400px; height: 400px" src="{{ $item->medicines->media ? $item->medicines->media->getMedia($item->medicines->media, 'thumb') : "" }}" alt="{{ $item->medicines->name }}" class="img-fluid">
                            </td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->dosage }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
        <div class="content col-xs-8 col-md-8 no-paddings-sm mt-1">
            @if (isset($user->address))
                <form action="{{ route('client.matrix') }}" method="post">
                    @csrf
                    <input type="hidden" name="origin" value="{{ $user->address }}">
                    <button type="submit" class="btn btn-primary">Gợi ý đến hiệu thuốc gần nhất</button>
                </form>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.swal2-confirm').click(function() {
                console.log('click');
                location.href = '{{ route('client.login') }}';
            });
        });
    </script>
@endsection
