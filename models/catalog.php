<?php

class Catalog{

    private array $products;

    public function addProduct(Product $product){
        $this->products[] = $product;
    }

    /**
     * Get the value of allProduct
     */ 
    public function getAllProduct()
    {
        return $this->products;
    }
}