<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";




$product1 = new Product("Pollo",13,"Gatti","immagine");
$food1 = new Food("Cibo per gatto",14,"Gatti","immagine","2024-03-10",500);
$toy1 = new Toy("Ball",23,"All","immagine","Plastic",true);

var_dump($product1);
var_dump($food1);
var_dump($toy1);


?>