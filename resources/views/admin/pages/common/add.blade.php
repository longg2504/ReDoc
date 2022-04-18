@extends('admin/layout/' . $layout)

@section('subhead')
    <title>ReDoc</title>
@endsection

@section('subcontent')
    <form class="validate-form" action="" method="post" id="insert-article-page">
        {{ csrf_field() }}
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            {{-- <h2 class="text-lg font-medium mr-auto">{{ isset($article) ? 'Cập nhật' : 'Tạo mới' }} bài viết</h2> --}}
            <h2 class="text-lg font-medium mr-auto"> bài viết</h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md flex items-center mr-2">Lưu</button>
                <a href="" class="btn px-2 box text-gray-700 dark:text-gray-300 mr-2">Trở về</a>
            </div>
        </div>
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="intro-y box p-5 col-span-12 lg:col-span-8">
                <x-text name="" value="" label="Tiêu đề" placeholder="nhập" />
                <x-select selects="" name="category_id" label="Danh mục" value="" />
                <x-textarea name="description" label="Mô tả ngắn" value="" />
                <x-ckeditor name="content" label="Nội dung" value="" />
                <x-file name="image" label="Ảnh đại diện" value="" />
            </div>
            <div class="intro-y col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">
                    <x-check name="active" label="trạng thái" value="1" />
                </div>
            </div>
        </div>
    </form>
    @include('admin.errors.common')
@endsection
