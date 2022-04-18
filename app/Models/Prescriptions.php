<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class Prescriptions extends Model
{
    use HasFactory, RelationshipsTrait;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function diseases()
    {
        return $this->belongsTo(Diseases::class, 'disease_id', 'id');
    }

    public function medicines()
    {
        return $this->belongsTo(Medicines::class, 'medicine_id', 'id');
    }
}
