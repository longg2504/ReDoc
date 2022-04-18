<?php

namespace App\Helper;

use App\Models\Media;
use App\Models\Settings;
use App\Models\User;
use Carbon\Carbon;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Http;
use Reflection;
use ReflectionClass;

class Common
{
    public static function showThumb($folderUpload, $image)
    {
        if (isset($image)) {
            return asset('/storage/images/' . $folderUpload . "/thumb/" . $image);
        } else {
            return '';
        }
    }

    public static function getImage($image, $type = "", $folderUpload = "")
    {
        if (empty($type)) {
            $path = asset("/storage/images/" . $folderUpload . "/" . $image);
        } else if ($type == "thumb") {
            $path = asset("/storage/images/" . $folderUpload . "/thumb/" . $image);
        } else if ($type == "fullpath") {
            $path = asset($image);
        } else if ( $type == 'media' ) {
            $imageRaw = Media::where('id', $image)->first();
            if (isset($imageRaw)) {
                $path = asset("/storage/images/" . $imageRaw->path . "/thumb/" . $imageRaw->name);
            } else {
                $path = "";
            }
        }

        return $path;
    }

    public static function fixControllerName($controller)
    {
        $final = '';
        $result = $controller;
        for ($i = 0; $i < strlen($result); $i++) {
            if (ord($result[$i]) >= 65 && ord($result[$i]) <= 90 && $i != 0) {
                $line1 = strtolower(substr($result, 0, $i));
                $line2 = strtolower($result[$i]) . substr($result, $i + 1);
                $final .= $line1 . '-' . $line2;

                $a = Common::fixControllerName($final);
                return $a;
            }
        }

        return $result;
    }

    public static function getShortNameController($controller)
    {
        $controller = preg_replace("#Controller#", "", $controller);

        return strtolower(Common::fixControllerName($controller));
    }

    public static function getSettings($key)
    {

        $Settings = Settings::where('Settings_key', $key)->first();
        if (empty($Settings)) {
            return '';
        }

        return $Settings->Settings_value;
    }

    public static function clearCache()
    {
        try {

            Artisan::call('cache:forget spatie.permission.cache');
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
                } catch (\Exception $ex) {

            dd($ex->getMessage());

            Session::flash('error', trans('admin.error') . '. Lỗi: ' . $ex->getMessage());
            return redirect('/ad');
        }
    }

    public static function milliseconds()
    {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }

    public static function createName($name, $slug, $extension)
    {
        return $name . $slug . '_' . self::milliseconds() . '.' . $extension;
    }

    public function resizeThumb($request, $slug = null)
    {
        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {

                $extension = $request->thumbnail->extension();
                $name = self::createName($this->controllerName, $slug, $extension);
                $request->thumbnail->storeAs('images/' . $this->folderUpload, $name);
                $image_path = $request->file('image');
                $image = Image::make($image_path);
                $x400_image = $image->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);

                Storage::put('images/' . $this->folderUpload . "/thumb/$name", $x400_image);
                Storage::put('images/' . $this->folderUpload . "/$name", $image);

                return [
                    'image' => $name,
                    "url_image" => $_SERVER["HTTP_HOST"] . "/storage/images/" . $this->folderUpload . "/$name"
                ];
            }
        }
    }

    public static function formatMoney($money, $currency = null)
    {
        return number_format($money, 2) . "$currency";
    }

    public static function sendTelegram($id, $url, $name, $price)
    {
        $message = '%23' . $id . ' | ' . Carbon::now() . ' | ' . Auth::user()->name . '%0D%0A' . $url . '%0D%0A' . $name . ' | ' . $price;
        $send = "https://api.telegram.org/bot1990572928:AAFQGikxIqQ4JReEH9G1bysqIu4h0oh2wFE/sendMessage?chat_id=-1001598273120&text=" . $message;
        Http::get($send);
    }

    public static function sendTelegramMoney($id, $price)
    {
        $message = '%23' . $id . ' | ' . Carbon::now() . ' | ' . Auth::user()->name . '%0D%0A' . $price;
        $send = "https://api.telegram.org/bot1990572928:AAFQGikxIqQ4JReEH9G1bysqIu4h0oh2wFE/sendMessage?chat_id=-1001598273120&text=" . $message;
        Http::get($send);
    }
}
