<?php

require_once __DIR__ . '/products.php';

class DogBed extends Products {
    public $material;
    public $size;

    public function __construct(
        $name, 
        $imgUrl, 
        $price, 
        $category, 
        $stock, 
        $description, 
        $rating,
        string $material,
        string $size,
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
        $this->size = $size;
    }
}