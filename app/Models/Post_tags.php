<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class Post_tags extends Model
{
    use HasFactory, RelationshipsTrait;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function posts()
    {
        return $this->belongsTo(Posts::class, 'post_id', 'id');
    }

    public function tags()
    {
        return $this->belongsTo(Tags::class, 'tag_id', 'id');
    }
}
