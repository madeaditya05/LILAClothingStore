<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        $request->validate(['product_id' => 'required|exists:products,id']);

        $productId = $request->product_id;
        $userId = Auth::id();

        $wishlistItem = Wishlist::where('user_id', $userId)
                                ->where('product_id', $productId)
                                ->first();

        if ($wishlistItem) {
            // Jika sudah ada, hapus
            $wishlistItem->delete();
            $status = 'removed';
        } else {
            // Jika belum ada, tambahkan
            Wishlist::create([
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
            $status = 'added';
        }

        $count = Wishlist::where('user_id', $userId)->count();

        return response()->json([
            'status' => $status,
            'count' => $count,
        ]);
    }
}