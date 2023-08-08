<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'account');

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if (!$connection) {
        die('Database connection failed.') . mysql_error();
    }

    $database = mysqli_select_db($connection, DB_NAME);

    if (!$database) {
        die('Database connection failed.') . mysql_error();
    }

?>