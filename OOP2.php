<?php

    class Product{

        public $naam;

    }

    $auto1 = new Product();
    $auto1->naam = "Audi";
    
    $auto2 = new Product();
    $auto2->naam = "Subaru";

    $auto3 = new Product();
    $auto3->naam = "Mazda";

    echo $auto1->naam . "<br>";
    echo $auto2->naam . "<br>";
    echo $auto3->naam . "<br>";

    $auto1->naam = "Mercedes";
    echo $auto1->naam . "<br>";

?>