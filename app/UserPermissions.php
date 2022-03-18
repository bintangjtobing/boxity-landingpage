<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermissions extends Model
{
    protected $table = 'users_permissions';
    protected $fillable = [
        'user_id', 'permission_id'
    ];
    protected $casts = [];
    
    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id', 'id');
    }
}
