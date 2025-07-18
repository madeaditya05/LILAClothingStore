<?php

namespace App\Http\Controllers;

// Anda tidak lagi memerlukan 'Wishlist' atau 'Auth' di sini
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            /// 1. Ambil data untuk "New Arrivals" (8 produk terbaru)
        $newArrivals = Product::latest()->take(8)->get();

        // 2. Ambil data untuk "Best Sellers" (Contoh: produk yang diurutkan berdasarkan ID secara descending)
        //    Anda bisa mengubah logika ini sesuai kebutuhan, misal:
        //    $bestSellers = Product::where('is_best_seller', true)->take(8)->get();
        $bestSellers = Product::orderBy('id', 'desc')->take(8)->get();

        $youMayLike = Product::inRandomOrder()->take(8)->get();

        // 3. Kirim KEDUA variabel ke view dengan nama yang berbeda
        return view('tampilan.dashboard', [
            'newArrivals' => $newArrivals,
            'bestSellers' => $bestSellers,
            'youMayLike'  => $youMayLike,
        ]);
    }
}