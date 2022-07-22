<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'description',
        'category',
        'views',
        'userid', 'status', 'slug', 'seo_title', 'seo_description', 'subcategory'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
    public function image()
    {
        return $this->belongsTo(blogImages::class, 'id', 'blog_id');
    }
    public function subcategories()
    {
        return $this->belongsTo(subCategories::class, 'subcategory', 'id');
    }
    public function categories()
    {
        return $this->belongsTo(categories::class, 'category', 'id');
    }
    public function file()
    {
        return $this->belongsTo(blogFiles::class, 'id', 'blog_id');
    }
    protected $casts = [
        'created_at' => 'datetime:d M, Y',
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = Str::slug($model->title, '-');
        });
    }
}
