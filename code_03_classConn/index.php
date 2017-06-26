<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "Product.php";

$db = new Conn("mysql:host=localhost;dbname=PHP-OO", "root", "303078");

$product = new Product($db);

$list = $product->list();

var_dump($list);