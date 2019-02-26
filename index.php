<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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

    echo $string." ".$szam."<br/><br/>";
    print_r($tomb);

    echo "<br/><br/>";

    foreach ($uj_tomb as $ertek) {
        echo $ertek."<br/>";
    }

    echo "<table border='1'>";
    foreach ($badass_tomb as $nev => $ev) {

        echo "<tr>";
        echo "<td>".$nev."</td>";
        echo "<td>".$ev."</td>";
        echo "</tr>";

    }

    echo "</table>";
    echo "<br/><br/>";

    echo $_SERVER['HTTP_HOST'];
    echo "<br/><br/>";
    echo $_GET["name"];

    echo "<br/><br/>";
?>

<?= "Még egy példa szöveg"?>



</body>
</html>