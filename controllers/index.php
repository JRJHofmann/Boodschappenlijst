<?php
    $titlePag = "boodschappenlijst";
    $boodschappen =  [
        "naam" => "Brood",
        "aantal" => "",
        "stuk_prijs" => "1.00"
    ];

    [
        "naam" => "Broccolie",
        "aantal" => "",
        "stuk_prijs" => "0.99"
    ];

    [
        "naam" => "krentenbollen",
        "aantal" => "",
        "stuk_prijs" => "1.20"
    ];

    [
        "naam" => "noten",
        "aantal" => "",
        "stuk_prijs" => "2.99"
    ];


    function calc_total_prijs($carry, $item){
        return $carry + ($item["aantal"] * $item["stuk_prijs"]);
    }

    $total_prijs = array_reduce($boodschappen, "calc_total_prijs", 0);
    
    include "functions.php";
    include "views/index.view.php";
?>
