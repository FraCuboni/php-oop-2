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
    public $image;
    public $category;
    public $type;

    public function __construct(string $name, float $prices, string $description, string $link, string $image, string $category, string $type)
    {
        $this->name = $name;
        $this->prices = $prices;
        $this->description = $description;
        $this->link = $link;
        $this->image = $image;
        $this->category = $category;
        $this->type = $type;
    }
}

$productsArray = [new Products(
    'girogio',
    '123',
    'girogio',
    'girogio',
    'girogio',
    'girogio',
    'girogio'
)];

var_dump($productsArray);
