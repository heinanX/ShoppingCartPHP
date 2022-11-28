<?php


class Product
{
    private $id;
    private $title;
    private $price;
    private $inStock;

    function __construct($id, $title, $price, $inStock) {
        $this->id = $id; 
        $this->title = $title; 
        $this->price = $price; 
        $this->inStock = $inStock; 
    }

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

    // TODO Skriv en konstruktor som sätter alla properties

    // TODO Skriv getters för alla properties

}
