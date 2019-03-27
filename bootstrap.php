<?php

include "functions.php";
include "database/connection.php";
include "database/QueryBuilder.php";
include "task.php";

$config = require "config.php";

return new QueryBuilder(
    Connection::make($config['database'])
);

