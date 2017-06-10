<?php
$db = new \PDO("mysql:host=localhost;dbname=PHP-OO","root","1erivaldo2");

$query = "SELECT * FROM products";

$stmt = $db->prepare($query);

$stmt->execute();

$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($list);