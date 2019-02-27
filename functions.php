<?php
function dd($data) {
    echo "dump függvény vok <br/>";

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}


function sum($num1, $num2) {
    return $num1 + $num2;
}


function isOldEnough($age) {
    if($age >= 18) {
        return true;
    }else{
        return false;
    }
}
?>