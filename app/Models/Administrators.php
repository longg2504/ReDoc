<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Traits\RelationshipsTrait;
use App\Models\Scopes\ActiveScope;

class Administrators extends Authenticatable
{
    use HasRoles, HasFactory, Notifiable, RelationshipsTrait;

    protected $guard_name = 'admin';

    public static $PER_PAGE = 30;
    const ROLE_ADMINISTRATOR = 1;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get list
     *
     * @param Request $request
     * @return mixed
     */
    public static function getList(Request $request)
    {
        $limit = $request->post('limit') ? $request->post('limit') : self::$PER_PAGE;
        return self::name($request->name)
            ->paginate($limit);
    }

    public function role()
    {
        return $this->belongsTo('Spatie\Permission\Models\Role', 'role_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ActiveScope());
    }
}
