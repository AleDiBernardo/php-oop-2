<?php


class Product {

    private string $name;
    private int $price;
    private string $description;
    private string $category;
    private string $image;
    private array $validCategory = ["Gatti","Cani","All"];



    public function __construct(string $_name, int $_price, string $_category, string $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;

        $this->setCategory($_category);
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

        $flag = false;

        foreach($this->validCategory as $curCategory){
            if($category === $curCategory){
                $flag = true;
            }
        }
        if (!$flag) {
            throw new Exception("Category not found");
        } 

        $this->category = $category;

    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

    
    }

}