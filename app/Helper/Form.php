<?php

namespace App\Helper;

use App\View\Components\File;
use App\View\Components\Text;
use App\View\Components\Select;
use App\View\Components\Ckeditor;
use App\View\Components\Password;
use App\View\Components\Textarea;

class Form
{

    public static function show($item, $item_model)
    {
        $html = '';

        $data['item'] = $item;
        $data['item_model'] = $item_model;

        switch ($item['type']) {

            case "text";

                $html = new Text($data);
                $html = $html->render()->with($html->data());
                break;

            case "money";

                $html = new Text($data);
                $html = $html->render()->with($html->data());
                break;

            case "select";

                if (is_array($data['item']['data_source'])) {
                    $data['item']['selects'] = $data['item']['data_source'];
                } else {
                    $data['item']['selects'] = new $data['item']['data_source']();
                }


                $html = new Select($data);
                $html = $html->render()->with($html->data());
                break;

            case "file";

                $html = new File($data);
                $html = $html->render()->with($html->data());
                break;

            case "file";

                $html = new File($data);
                $html = $html->render()->with($html->data());
                break;

            case "ckeditor";

                $html = new Ckeditor($data);
                $html = $html->render()->with($html->data());
                break;

            case "textarea";

                $html = new Textarea($data);
                $html = $html->render()->with($html->data());
                break;

            case "password";

                $html = new Password($data);
                $html = $html->render()->with($html->data());
                break;
        }


        return $html;
    }
}
