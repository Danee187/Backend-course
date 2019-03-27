
<?php

    $query= require "bootstrap.php";
    $query->selectAll('tasks', 'Task');

    dd($tasks);

    include "index.view.php";




