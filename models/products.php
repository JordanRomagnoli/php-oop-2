<?php

class Products {

    public $name;
    public $imgUrl;
    public $price;
    public $category;
    public $stock;
    public $description;
    public $rating;
    public $discount;

    public function __construct(
        string $name, 
        string $imgUrl, 
        int $price, 
        int $category, 
        int $stock, 
        string $description = '', 
        int $rating = null,
        bool $discount = null,
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