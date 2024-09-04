<?php
class Types extends Products
{
    public $cibo;

    public function __construct(string $name, float $prices, string $description, string $type, Categories $categories, string $cibo)
    {

        // richiamo costruttore classe genitore
        parent::__construct($name, $prices, $description, $type, $categories);

        $this->cibo = $cibo;
    }
    public function setLevel($cibo)
    {
        $this->cibo = $cibo;
    }
}
