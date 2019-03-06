
<?php

    $string = "Ez egy példa szöveg";
    $szam = 18;
    $tomb = array(1,2,3,4,5); // php5
    $uj_tomb = [4,5,6,7,8];   // php7
    $badass_tomb = [
        "Dani" => 25,
        "Jóska" => 28,
        "Júliska" => 19
    ];

    $person = [
        "name" => "Dani",
        "age" => 25,
        "gendre" => "férfi"
    ];


    include "functions.php";
    include "index.view.php";

    //require "index.view.php"; // másmilyen hiba kezelése van , ha hiba van megakad a kód


?>



