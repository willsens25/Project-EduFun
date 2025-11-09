<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Pagination\Paginator; // <--- 1. TAMBAHIN INI

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
        // Kode yang udah ada buat share kategori ke navbar
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });

        // 2. TAMBAHIN BARIS INI
        Paginator::useBootstrapFive();
    }
}