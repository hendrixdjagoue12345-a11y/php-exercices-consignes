<?php
declare(strict_types=1);
$products = [
    ['name' => 'Clavier', 'price' => 59, 'available' => true],
    ['name' => 'Tapis', 'price' => 12, 'available' => false],
    ['name' => 'Souris', 'price' => 30, 'available' => true],
];
// TODO : filter, map, reduce.

 array_filter($products, function ($product) {
     return $product['available'];
 });
 $products = array_values($products);

 $products = array_slice($products, 0, 10);

 $name = array_map(function ($product) {
     return $product['name'];
 }, $products);

