<?php
namespace Shared\Cart\Facades;

use Nova\Support\Facades\Facade;

class Cart extends Facade
{
    protected static function getFacadeAccessor() { return 'cart'; }
}
