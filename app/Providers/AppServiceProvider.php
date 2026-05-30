<?php

namespace App\Providers;

use App\Domains\Carrinho\Models\Carrinho;
use App\Domains\Carrinho\Services\CarrinhoService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot(): void {
        View::composer('layouts.navigation_auth', function($view){
            $view->with(
                'cartcount', 
                app(CarrinhoService::class)->getItensCount()
            );
        });
    }
}
