<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

use Pimple\Container;

$list = $container['ServiceProduct']->listProduct();

require_once "list_product.php";