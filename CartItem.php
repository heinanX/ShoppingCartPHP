<?php


class CartItem
{
    private $product;
    private int $quantity;

    // TODO Skriv en konstruktor som sätter alla properties
    function __construct($product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    // TODO Skriv getters för alla properties
    function getProduct() {
        return $this->product;
    }

    function getQuantity() {
        return $this->quantity;
    }

    function setQuantity() {
        return $this->quantity++;
    }

    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
        $inStock = $this->product -> getInStock();
        if($inStock>$this->quantity) {
            $this->quantity++;
        } else {
            echo "Kan inte lägga till " . $this->product->getTitle() . ". Slut i lager";
        }
    }
}