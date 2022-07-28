<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'email', 'post_id', 'parent_id', 'body'];

    /**
     * The belongs to Relationship
     *
     * @var array
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function replies()
    {
        return $this->hasMany(comments::class, 'parent_id');
    }
    public function blog()
    {
        return $this->belongsTo(blog::class, 'post_id');
    }
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
}
