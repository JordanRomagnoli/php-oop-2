<?php

class CreditCard {

    public $cardNumber;
    public $cardCode;
    public $expireDate;

    public function __construct(string $cardNumber,int $cardCode ,DateTime $expireDate) {
        $this->cardNumber = $cardNumber;
        $this->cardCode = $cardCode;
        $this->expireDate = $expireDate;
    }
    
}