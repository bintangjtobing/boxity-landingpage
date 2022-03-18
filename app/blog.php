<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'description',
        'category',
        'views',
        'userid',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
    public function image()
    {
        return $this->belongsTo(blogImages::class, 'id', 'blog_id');
    }
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
