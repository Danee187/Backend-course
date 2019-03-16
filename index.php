
<?php

    include "functions.php";
    include "task.php";

    $tasks = [
      new Task("első feladat", "Anett"),
      new Task("második feladat", "Fecó"),
      new Task("harmadik feladat", "Eszter")
    ];

    $tasks[1]->complete();
    $tasks[1]->setAssignee("Béla");

    //$task = new Task("leírás");
   // $task->complete();


    include "index.view.php";

    //require "index.view.php"; // másmilyen hiba kezelése van , ha hiba van megakad a kód


?>



