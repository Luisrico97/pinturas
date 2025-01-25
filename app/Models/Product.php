<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'sizes',
        'colors',
        'qty',
        'sku',
        'image_url',
        'status',
        'brand',
        'categorie_id',
        'subcategorie_id',
    ];
}
