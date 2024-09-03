<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'minimumqty',
         'quantity',
         'slug',
         'short_description',
         'old_price',
         'additional_information',
         'shipping_return',
         'updated_at',
         'created_at',
         'categories_id '

    ];
}
