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

// php -h   --> help
// php -S localhost:8000     --> php server futtatása cmd-ben

$user = "Dani";
echo $user;

$tomb = ['A'];
var_dump($tomb); // print_r($tomb);

$a = array(); // PHP 5
$b = []; // PHP 7

$peapole = array("Dani",25,"Male");
$peapole = array(
    "name" => "Dani",
    "age" => 25,
    "gendre" => "Male"
);

echo "<ul>";
foreach ($peapole as $key => $value) {
    echo "<li>".$key.": ".$value."<li>";
}
echo "</ul>";

var_dump($_SERVER);


exit;
?>

<?= "én meg a php" ?>




</body>
</html>