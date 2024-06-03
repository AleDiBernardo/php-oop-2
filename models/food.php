<?php

require_once __DIR__ . "/product.php";

class Food extends Product{

    private string $expiration;
    private int $weigth_gr;

    public function __construct(string $_name, int $_price, string $_category,string $_image, string $_expiration, string $_weigth_gr)
    {
        parent::__construct($_name, $_price, $_category,$_image);

        $this->expiration = $_expiration;
        $this->weigth_gr = $_weigth_gr;

    }


    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

    }

    /**
     * Get the value of weigth_gr
     */ 
    public function getWeigth_gr()
    {
        return $this->weigth_gr;
    }

    /**
     * Set the value of weigth_gr
     *
     */ 
    public function setWeigth_gr($weigth_gr)
    {
        $this->weigth_gr = $weigth_gr;

    }
}