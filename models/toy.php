<?php

require_once __DIR__ . "/product.php";


class Toy extends Product{
    private string $material;
    private bool $isBatteryOperated;

    public function __construct(string $_name, int $_price, string $_category,string $_image, string $_material, bool $_isBatteryOperated = false)
    {
        parent::__construct($_name, $_price, $_category,$_image);

        $this->material = $_material;
        $this->isBatteryOperated = $_isBatteryOperated;


    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of isBatteryOperated
     */ 
    public function getIsBatteryOperated()
    {
        return $this->isBatteryOperated ? "Yes" : "No";
    }

    /**
     * Set the value of isBatteryOperated
     *
     */ 
    public function setIsBatteryOperated($isBatteryOperated)
    {
        if (!is_bool($isBatteryOperated)) {
          throw new Exception("Only bool value accepted");
        }
        $this->isBatteryOperated = $isBatteryOperated;

    }
}