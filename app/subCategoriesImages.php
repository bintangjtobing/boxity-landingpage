<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subCategoriesImages extends Model
{
    public $table = 'sub_categories_images';
    public $fillable = [
        'sub_category_id', 'file'
    ];
    public function subcategories()
    {
        return $this->belongsTo(subCategories::class, 'id');
    }
}
