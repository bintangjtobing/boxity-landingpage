<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class events extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'event_name',
        'slug',
        'start_date',
        'end_date',
        'event_content', 'organized_by', 'status', 'type', 'userid'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
    public function image()
    {
        return $this->belongsTo(event_images::class, 'id', 'event_id');
    }
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = Str::slug($model->event_name, '-');
        });
    }
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
