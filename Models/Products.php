<?php

// collegamenti

class Products
{
    public $name;
    public $price;
    public $description;
    public $link;

    public $type = 0;

    public function __construct(string $name, float $price, string $description, string $link)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->link = $link;
    }

    public function getProductName()
    {
        return $this->name;
    }
    public function getProductPrice()
    {
        return $this->price . '$';
    }
    public function getProductDescription()
    {
        return $this->description;
    }
    public function getProductLink()
    {
        return $this->link;
    }
}
