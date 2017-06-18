<?php

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

use Pimple\Container;

$list = $container['product']->lista();

var_dump($list);