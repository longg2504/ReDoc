<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\AdminController;

class AuthController extends AdminController
{

    protected $messages = [];
    protected $rulesCreate;
    protected $attributesCreate;
    protected $notAcceptedCreateAndEdit = ['id', '_token', 'created_at', 'updated_at'];

    public function register()
    {
        return view('client.sign-up');
    }

    public function postRegister(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required|email'
            ]);

            if ($validator->fails()) {

                Alert::error('error', 'Thiếu thông tin cần thiết !');
                return back();
            }

            $userWithName = User::where('username', $request->username)->first();
            $userWithEmail = User::where('email', $request->email)->first();

            if ($userWithName) {

                Alert::error('error', 'Username đã tồn tại!');
                return redirect()->back();
            }

            if ($userWithEmail) {

                Alert::error('error', 'Email đã tồn tại!');
                return redirect()->back();
            }

            if ($request->password != $request->repassword) {
                Alert::error('error', 'Mật khẩu không trùng khớp!');
                return redirect()->back();
            }

            $request->merge(['active' => 1]);
            unset($request['repassword']);
            $this->updateOrCreate($request->all(), null, new User());

            Alert::success('success', 'Đăng ký thành công!');
            return redirect()->route('client.login');

        } catch (\Exception $ex) {

            Alert::error('error', 'Lỗi: ' . $ex->getMessage());
            return redirect('/');
        }
    }

    public function login()
    {
        return view('client.login');
    }

    public function postLogin(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'username' => 'required'
            ]);

            if ($validator->fails()) {

                Alert::error('error', 'Thiếu thông tin cần thiết !');
                return back();
            }

            if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {

                $user = User::where('username', $request->username)->first();

                Auth::guard('web')->login($user);
                Alert::success('success', trans('admin.login_success'));

                return redirect()->route('client.index');
            } else {

                Alert::error('error', trans('admin.login_error'));
                return redirect()->route('client.login')->withInput();
            }
        } catch (\Exception $ex) {

            Alert::error('error', trans('admin.login_error') . '. Lỗi: ' . $ex->getMessage());
            return redirect()->route('login')->withInput();
        }
    }

    public function logout()
    {
        if (Auth::check()) {

            Auth::logout();

            Alert::success('success', trans('admin.logout_success'));
            return redirect()->route('top');
        }
    }


    public function setting(){
        $user = Auth::user();
        return view('client.setting', compact('user'));
    }
}
