<?php


class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;


    // TODO Skriv en konstruktor som sätter alla properties
    function __construct($id, $title, $price, $inStock) {
        $this->id = $id; 
        $this->title = $title; 
        $this->price = $price; 
        $this->inStock = $inStock; 
    }


    // TODO Skriv getters för alla properties
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getPrice() {
        return $this->price;
    }
    
    function getInStock() {
        return $this->inStock;
    }

}
