<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=PHP-OO","root","1erivaldo2");

$product = new Product($db);

$list = $product->list();

var_dump($list);