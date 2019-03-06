
<?php

    include "functions.php";
    include "task.php";

    $tasks = [
      new Task("első feladat"),
      new Task("második feladat"),
      new Task("harmadik feladat")
    ];

    $tasks[0]->complete();

    //$task = new Task("leírás");
   // $task->complete();


    include "index.view.php";

    //require "index.view.php"; // másmilyen hiba kezelése van , ha hiba van megakad a kód


?>



