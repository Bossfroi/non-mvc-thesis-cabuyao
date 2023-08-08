<?php

// PHP PDO Using Row Count
// get number of data in pdo result

try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=agriculture","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

$pdoQuery = "SELECT * FROM user";

$pdoResult = $pdoConnect->query($pdoQuery);

$pdoRowCountuser = $pdoResult->rowCount();


try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=agriculture","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}

$pdoQuery = "SELECT * FROM buyproduct WHERE Orderstatus='4'";

$pdoResult = $pdoConnect->query($pdoQuery);

$resultdelivery = $pdoResult->rowCount();


?>
