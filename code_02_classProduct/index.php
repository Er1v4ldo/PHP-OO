<?php

require_once "Product.php";

$db = new \PDO("mysql:host=localhost;dbname=PHP-OO","root","303078");

$product = new Product($db);

$list = $product->list();

var_dump($list);