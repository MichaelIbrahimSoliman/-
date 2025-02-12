<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id  ',
        'brand_name',
        'brand_description',
        'brand_slug' ,
        'meta_name'  ,
        'meta_description',
        'meta_keywords',

    ];
}
