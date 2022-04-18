<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, RelationshipsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    //     'balance',
    //     'ref',
    //     'account'
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
