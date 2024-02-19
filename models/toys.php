<?php

require_once __DIR__ . '/products.php';

class Toys extends Products {
    public $material;
    public $isOutdoor;


    public function __construct(
        $name, 
        $imgUrl, 
        $price, 
        $category, 
        $stock, 
        $description, 
        $rating,
        string $material,
        bool $isOutdoor,
        
    ) {
        parent::__construct(
            $name, 
            $imgUrl, 
            $price, 
            $category, 
            $stock, 
            $description, 
            $rating
        );

        $this->material = $material;
        $this->isOutdoor = $isOutdoor;
    }
}