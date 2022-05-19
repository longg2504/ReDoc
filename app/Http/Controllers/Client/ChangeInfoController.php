<?php

namespace App\Http\Controllers\Client;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Client\Auth\SingupRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ChangeInfoController extends AdminController
{
    protected $notAcceptedCreateAndEdit = ['id', '_token', 'created_at', 'updated_at', 'oldPassword', 'confirmPassword'];

    public function changePassword()
    {
        return view('client.setting.change-password');
    }

    public function changeInfo(Request $request)
    {
        $user = Auth::user();

        return view('client.setting.change-info', compact('user'));
    }

    public function updateInfo(Request $request)
    {
        $user = Auth::user();

        if(!Str::contains($request->address, "Đà Nẵng")) {
            $request->merge(['address' => $request->address . ', ' . $request->district . ', ' . "Đà Nẵng"]);
        }

        $this->updateOrCreate($request->all(), $user->id, new User());

        Alert::success('success', 'Cập nhật thông tin thành công!');
        return redirect()->back()->with('success', 'Cập nhật thông tin thành công!');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if ($request->password != $request->confirmPassword) {
            Alert::error('error', 'Mật khẩu không trùng khớp!');
            return redirect()->back();
        }

        if (!Hash::check($request->oldPassword, Auth::user()->password)) {
            Alert::error('error', 'Mật khẩu cũ không đúng!');
            return redirect()->back();
        }

        $this->updateOrCreate($request->all(), $user->id, new User());

        Alert::success('success', 'Cập nhật mật khẩu thành công!');
        return redirect()->back()->with('success', 'Cập nhật mật khẩu thành công!');
    }
}

?>
