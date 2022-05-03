<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Helper\Common;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        try {

            $file = $request->file('upload');

            if (is_object($file)) {

                $extension = $file->extension();
                $name = Common::createName(explode('.', $file->getClientOriginalName())[0], null, $extension);
                $file->storeAs('public/images/uploads', $name);
                $image_path = $file;
                $image = Image::make($image_path);

                $x400_image = $image->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode($extension);

                Storage::put('public/images/uploads' . "/thumb/$name", $x400_image);

                return response()->json([
                    "resourceType" => "Files",
                    "currentFolder" => asset('storage/images/uploads'),
                    "fileName" => $name,
                    "uploaded" => 1
                ]);
            }

        } catch (\Exception $ex) {

            return;
        }
    }
}
