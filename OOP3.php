<?php

    class Product{

        public $naam;
        public $price;

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }
    $auto1 = new Product();
    $auto1->naam = "Audi R8";
    $auto1->price = 302653.79;
    
    $auto2 = new Product();
    $auto2->naam = "Subaru BRZ";
    $auto2->price = 50000;

    $auto3 = new Product();
    $auto3->naam = "Mazda RX7";
    $auto3->price = 31751;

    echo $auto1->naam . "<br>";
    echo $auto1->formatPrice() . "<br>";

    echo $auto2->naam . "<br>";
    echo $auto2->formatPrice() . "<br>";

    echo $auto3->naam . "<br>";
    echo $auto3->formatPrice() . "<br>";

    $auto1->naam = "Devel Sixteen";
    $auto1->price = 1800000;

    echo $auto1->naam . "<br>";
    echo $auto1->formatPrice() . "<br>";

?>