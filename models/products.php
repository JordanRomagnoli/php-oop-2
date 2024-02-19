<?php

class Products {

    public $name;
    public $imgUrl;
    public $price;
    public $category;
    public $stock;
    public $description;
    public $rating;

    public function __construct(
        string $name, 
        string $imgUrl, 
        string $price, 
        int $category, 
        int $stock, 
        string $description = '', 
        int $rating = null
    ) 
        {
            $this->name = $name;
            $this->imgUrl = $imgUrl;
            $this->price = $price;
            $this->category = $category;
            $this->stock = $stock;
            $this->description = $description;
            $this->rating = $rating;
    }
}