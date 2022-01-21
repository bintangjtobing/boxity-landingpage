<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = [
        'email'
    ];
}
