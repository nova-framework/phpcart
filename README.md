# PHPCart
Simple framework agnostic shopping cart.

This is been ported over from https://github.com/anam-hossain/phpcart this version has been configured to work with Nova Framework.

## Features

- Simple API
- Support multiple cart instances
- Nova Framework integration

## Requirements

- PHP 5.4+

## Installation
Download this repo and place inside the `Shared` folder.

open the config/app.php

In the $providers array add the following service provider.

```php
'Shared\Cart\CartServiceProvider'
```

Add the facade of this package to the $aliases array.

```php
'Cart' => 'Shared\Cart\Facades\Cart'
```

You can now use this facade in place of instantiating the Cart yourself.

## Usage

### Add Item

The add method required `id`, `name`, `price` and `quantity` keys. However, you can pass any data that your application required.

```php
Cart::add([
    'id'       => 1001,
    'name'     => 'Skinny Jeans',
    'quantity' => 1,
    'price'    => 90
]);
```

### Update Item


```php
Cart::update([
    'id'       => 1001,
    'name'     => 'Hoodie'
]);
```

### Update quantity


```php
Cart::updateQty(1001, 3);
```

### Update price

```php
Cart::updatePrice(1001, 30);
```

### Remove an Item

```php
Cart::remove(1001);
```

### Get all Items

```php
Cart::getItems();
// or
Cart::items();
```

### Get an Item

```php
Cart::get(1001);
```

### Determining if an Item exists in the cart

```php
Cart::has(1001);
```

### Get the total number of items in the cart

```php
Cart::count();
```

### Get the total quantities of items in the cart

```php
Cart::totalQuantity();
```

### Total sum

```php
Cart::getTotal();
```

### Empty the cart

```php
Cart::clear();
```

### Multiple carts

PHPCart supports multiple cart instances, so that you can have as many shopping cart instances on the same page as you want without any conflicts.

```php
$cart = new Cart('cart1');
// or
$cart->setCart('cart2');
$cart->add([
    'id'       => 1001,
    'name'     => 'Skinny Jeans',
    'quantity' => 1,
    'price'    => 90
]);

//or
$cart->named('cart3')->add([
    'id'       => 1001,
    'name'     => 'Jeans',
    'quantity' => 2,
    'price'    => 100
]);
```
