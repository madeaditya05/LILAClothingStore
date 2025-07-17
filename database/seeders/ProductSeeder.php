<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Pastikan ini ada

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Baggy Shirt',
            'description' => 'A comfortable and stylish baggy shirt.',
            'price' => 55.00,
            'image' => 'images/baju1.jpg'
        ]);

        Product::create([
            'name' => 'Elegant Blouse',
            'description' => 'A beautiful blouse for formal events.',
            'price' => 75.00,
            'image' => 'images/baju2.jpg'
        ]);
    }
}