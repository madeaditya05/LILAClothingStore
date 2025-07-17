<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // Ganti 'dashboard' dengan nama view Anda
        return view('tampilan.dashboard', ['products' => $products]);
    }
}
