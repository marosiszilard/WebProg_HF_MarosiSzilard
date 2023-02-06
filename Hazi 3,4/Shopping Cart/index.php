<?php
//
//require_once "Product.php";
//require_once "Cart.php";
//require_once "CartItem.php";

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$product1 = new Product(1, "iPhone 41", 2500, 10);
$product2 = new Product(2, "Nokia 1310", 400, 10);
$product3 = new Product(3, "Iphone  SE", 3200, 10);
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 2
echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 2900

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();

echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 4

echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 3700

$cart->removeProduct($product1);

echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 4

echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 3200
