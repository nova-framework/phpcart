<?php
namespace Shared\Cart;

use Nova\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cart', function() {
            return new \Shared\Cart\Cart;
        });
    }
}
