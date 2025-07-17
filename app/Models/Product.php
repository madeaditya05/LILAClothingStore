<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    public function isWishlisted()
    {
        if (auth()->check()) {
            return auth()->user()->wishlist()->where('product_id', $this->id)->exists();
        }
        return false;
    }
}