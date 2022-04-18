<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;
use App\Models\Media;

class Settings extends Model
{
    use HasFactory, RelationshipsTrait;

    const HOME_SEO_TITLE                = 'home_seo_title';
    const HOME_SEO_DESCRIPTION          = 'home_seo_description';
    const HOME_SEO_KEYWORD              = 'home_seo_keyword';
    const HOME_SEO_IMAGE                = 'home_seo_image';
    const LOGO                          = 'logo';

    const INPUT_TEXT = 1;
    const INPUT_TEXTAREA = 2;
    const INPUT_MEDIA = 3;

    const LIST_TYPE = array(
        self::INPUT_TEXT => 'Text',
        self::INPUT_TEXTAREA => 'Text Area',
        self::INPUT_MEDIA => 'Media'
    );

    const LIST_KEY = [
        self::HOME_SEO_TITLE        => 'Tiêu đề SEO trang chủ',
        self::HOME_SEO_DESCRIPTION  => 'Mô tả SEO trang chủ',
        self::HOME_SEO_KEYWORD      => 'Từ khóa SEO trang chủ',
        self::HOME_SEO_IMAGE        => 'Ảnh SEO trang chủ'
    ];

    protected $fillable = [
        'setting_key', 'setting_value', 'type', 'allow_update', 'allow_delete'
    ];

    protected $table = "settings";

    public function media() {
        return $this->belongsTo(Media::class, "setting_value", "id");
    }
}
