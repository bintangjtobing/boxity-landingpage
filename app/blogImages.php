<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogImages extends Model
{
    public $table = 'blog_images';
    public $fillable = [
        'blog_id', 'file'
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
