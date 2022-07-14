<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $table = 'laravel_fulltext';

    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
