<?php
class CatProducts extends Products
{
    public $type;

    public function __construct(string $name, float $price, string $description, string $link,)
    {

        // richiamo costruttore classe genitore
        parent::__construct($name, $price, $description, $link);

        $this->type = 'Per Gatti';
    }
    public function getProductType($type)
    {
        $this->type = $type;
    }
}
