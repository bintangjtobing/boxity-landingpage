<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogEarnings extends Model
{
    public $table = 'blog_earnings';
    public $fillable = [
        'blogid', 'userid', 'earning', 'note'
    ];
    public function blog()
    {
        return $this->belongsTo(blog::class, 'blogid');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
