<?php

// PHP PDO Using Row Count
// get number of data in pdo result

try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=agriculture","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

$pdoQuery = "SELECT * FROM requestuser";

$pdoResult = $pdoConnect->query($pdoQuery);

$pdoRowCountRequestuser = $pdoResult->rowCount();


?>
