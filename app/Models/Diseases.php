<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class Diseases extends Model
{
    use HasFactory, RelationshipsTrait;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }

    public function symptoms()
    {
        return $this->belongsToMany(Symptoms::class, 'disease_symptoms', 'disease_id', 'symptom_id');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescriptions::class, 'disease_id', 'id');
    }
}
