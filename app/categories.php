<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'categories_name',
        'description', 'slug', 'featured_image'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = Str::slug($model->categories_name, '-');
        });
    }
    public function image()
    {
        return $this->belongsTo(categoriesImages::class, 'id', 'category_id');
    }
}
