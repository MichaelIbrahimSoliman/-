<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subcategory extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'subcategories_name',
        'subcategories_description',
        'subcategories_code',
       'subcategories_slug',
       'subcategories_keywords'
    ];
}
