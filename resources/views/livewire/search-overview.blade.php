<div>
    <div class="search sm:block">
        <input id="searchField" type="text"
            class="search__input form-control dark:bg-dark-1 border-transparent placeholder-theme-8"
            placeholder="Search..." {{-- wire:change="change($event.target.value)"> --}} wire:model="searchTerm">
        <i data-feather="search" class="search__icon dark:text-gray-300"></i>

    </div>
    <a class="notification sm:hidden" href="">
        <i data-feather="search" class="notification__icon dark:text-gray-300"></i>
    </a>
    <div class="search-result {{ empty($data) ? '' : 'show' }}">
        <div class="search-result__content">
            @empty(!$data)
                @foreach ($data as $key => $item)
                    @if (isset($item[0]->name))
                        <div class="search-result__content__title">{{ ucfirst($key) }}</div>
                        <div class="mb-5">
                            @foreach ($item as $value)
                                <a href="{{ route('admin.' . \App\Helper\Common::getShortNameController($key) . '.index') }}" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="profile" class="rounded-full"
                                            src="{{ asset('dist/images/profile-10.jpg') }}">
                                    </div>
                                    <div class="ml-3">
                                        {{ $value->name }}
                                    </div>
                                    <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                        {{ $value->id }}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            @endempty
        </div>
    </div>
</div>
