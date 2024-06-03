<?php


class Product {

    private string $name;
    private int $price;
    private string $category;



    public function __construct(string $_name, int $_price, string $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     */ 
    public function setName($name)
    {
        $this->name = $name;

    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

    }
}