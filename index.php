<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/food.php";



$product1 = new Product("Pollo",13,"Gatti");
$food1 = new Food("Cibo per gatto",14,"Gatti","2024-03-10",500);

var_dump($product1);
var_dump($food1);



?>