<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class subCategories extends Model
{
    protected $table = 'sub_categories';
    protected $fillable = [
        'sub_categories_name',
        'description', 'slug', 'featured_image'
    ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->slug = Str::slug($model->sub_categories_name, '-');
        });
    }
    public function image()
    {
        return $this->belongsTo(subCategoriesImages::class, 'id', 'sub_category_id');
    }
}
