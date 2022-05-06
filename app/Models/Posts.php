<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class Posts extends Model
{
    use HasFactory, RelationshipsTrait;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }
}
