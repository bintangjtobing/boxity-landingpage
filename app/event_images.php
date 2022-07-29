<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event_images extends Model
{
    protected $table = 'event_images';
    protected $fillable = [
        'event_id',
        'file',
        'type'
    ];
    public function event()
    {
        return $this->belongsTo(events::class, 'event_id');
    }
}
