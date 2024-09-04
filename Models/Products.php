<?php

// collegamenti
require_once __DIR__ . '/Categories.php';
require_once __DIR__ . '/Types.php';

class Products
{
    public $name;
    public $prices;
    public $description;
    public $link;
    public $categories;

    public function __construct(string $name, float $prices, string $description, string $link, Categories $categories)
    {
        $this->name = $name;
        $this->prices = $prices;
        $this->description = $description;
        $this->link = $link;
        $this->categories = $categories;
    }
}
