<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Auth\Guard;
use App\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.head', function($view) use ($auth) {
            // patikriname ar vartotojas prisijunges
            if(!$auth->guest()) {
                // Gauname vartotojo krepselio informacija
                $cart = Cart::where('user_id', $auth->user()->id)->get();
                // Gauname norimas reikšmes iš krepšelio
                $totalItems = count($cart);
                $totalPrice = 0;
                foreach($cart as $item) {
                    $totalPrice += $item->product->price * $item->quantity;
                }
            } else {
                $cart = [];
                $totalItems = 0;
                $totalPrice = 0;
            }

            $view->with([
                "totalItems"=>$totalItems, 
                "totalPrice"=>$totalPrice,
                "cart"=>$cart]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
