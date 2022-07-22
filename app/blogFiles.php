<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogFiles extends Model
{
    public $table = 'blog_files';
    public $fillable = [
        'blog_id', 'files'
    ];
    public function blog()
    {
        return $this->belongsTo(blog::class, 'blog_id');
    }
}
