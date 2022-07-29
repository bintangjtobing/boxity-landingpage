<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_participants extends Model
{
    protected $table = 'event_participants';
    protected $fillable = [
        'name',
        'email',
        'nohp',
        'type',
        'refrences', 'sector', 'description', 'event_id'
    ];
}
