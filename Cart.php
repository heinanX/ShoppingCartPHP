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
    public function addProduct($product)
    {
        // var_dump($this->items);
        $cartItem = new CartItem($product, 1);
        // var_dump($cartItem);
        $this->items[$product->getId()] = $cartItem;
        // var_dump($cartItem);
        return $cartItem;

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
        var_dump($this->items);
        // $array = $this->items[];
        // return count($this->items);
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        
    //    $sum =  $this->item[quantity];
        // return $sum;
    }
}
