<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $table = 'jobvacancies';
    protected $fillable = [
        'status', 'title', 'location', 'divisi', 'part', 'description'
    ];
}
