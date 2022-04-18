<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;
use App\Models\User;

class Transactions extends Model
{
    use HasFactory, RelationshipsTrait;

    protected $fillable = [
        'user_id',
        'amount',
        'trans_id'
    ];

    protected $table = "transactions";

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
