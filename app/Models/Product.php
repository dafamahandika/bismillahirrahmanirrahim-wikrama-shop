<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="products";
    protected $fillable = [
        "product_category",
        "product_name",
        "product_price",
        "product_stock",
        "product_image",
        "product_desc",
    ];
}
