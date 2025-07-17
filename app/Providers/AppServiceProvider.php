<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // TAMBAHKAN KODE INI
        // Kode ini akan berjalan setiap kali view 'layoutsbootstrap.header' di-render
        View::composer('layoutsbootstrap.header', function ($view) {
            $wishlistCount = 0;
            if (Auth::check()) { // Cek jika user sudah login
                $wishlistCount = Wishlist::where('user_id', Auth::id())->count();
            }
            // Kirim variabel 'wishlistCount' ke view tersebut
            $view->with('wishlistCount', $wishlistCount);
        });
    }
}
