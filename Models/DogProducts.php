<?php
class DogProducts extends Products
{
    public $type;

    public function __construct(string $name, float $price, string $description, string $link,)
    {

        // richiamo costruttore classe genitore
        parent::__construct($name, $price, $description, $link);

        $this->type = 'per Cani';
    }
    public function getProductType($type)
    {
        $this->type = $type;
    }
}
