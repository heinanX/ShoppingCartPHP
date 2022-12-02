<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items
    function getItems() {
        return $this->items;
    }
  

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product,$quantity)
    {
        
        $foundItem = $this->items[$product->getId()] ?? null;

        var_dump($foundItem) ;
        if ($foundItem === null) {
            $cartItem = new CartItem($product, $quantity);
            $this->items[$product->getId()] = $cartItem;
            return $cartItem;
        } 
        else { 
            // $this->items[$product->getId()] = "AAAAAAAAAAAAAAAA";
            $quantity = +1;

        }
        // return $cartItem;
    }

    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
        unset($this->items[$product->getId()]);
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $quantity = [];

        foreach($this->items as $objects) {
            array_push($quantity,$objects->getQuantity());
        }
        return array_sum($quantity);
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $totalSum = [];

        foreach($this->items as $objects) {
            $product = $objects->getProduct();
            $price = $product -> getPrice();
            $sum = $objects -> getQuantity() * $price;
            array_push($totalSum, $sum);
        }
        return array_sum($totalSum);
    }
}