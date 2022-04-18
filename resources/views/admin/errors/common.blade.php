<!-- BEGIN: Success Notification Content -->
<input id="errors" type="hidden" value="{{count($errors) ? $errors : ''}}">
<input id="successMsg" type="hidden" value="{{Session::get('msg_res')}}">
<div
    id="success-notification-content"
    class="toastify-content hidden flex"
>
    <i class="text-theme-10" data-feather="check-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Thành công!</div>
        <div class="text-gray-600 mt-1">
            {{Session::get('msg_res')}}
        </div>
    </div>
</div>
<!-- END: Success Notification Content -->
<!-- BEGIN: Failed Notification Content -->
<div
    id="failed-notification-content"
    class="toastify-content hidden flex"
>
    <i class="text-theme-24" data-feather="x-circle"></i>
    <div class="ml-4 mr-4">
        <div class="font-medium">Thất bại!</div>
        <div class="text-gray-600 mt-1">
            Vui lòng kiểm tra lại thông tin!
        </div>
    </div>
</div>
<!-- END: Failed Notification Content -->
