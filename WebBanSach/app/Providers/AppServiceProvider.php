<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\GioHang;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('Web.layout', function($view) {
            if(Session('cart'))
            {
                $oldCart = Session::get('cart');
                $cart = new GioHang($oldCart);

                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }
        });
    }
}
