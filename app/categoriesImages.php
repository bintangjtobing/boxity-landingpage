<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoriesImages extends Model
{
    public $table = 'categories_images';
    public $fillable = [
        'category_id', 'file'
    ];
    public function categories()
    {
        return $this->belongsTo(categories::class, 'id');
    }
}
