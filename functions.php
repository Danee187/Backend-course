<?php
function dd($data) {
    echo "dump függvény vok <br/>";

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit;
}

function connectToDb()
{

}

/**
 * Fetches all tasks from the database, using a PDO object
 * @param $pdo
 * @return mixed
 */
function fetchAllTasks($pdo)
{

}

?>