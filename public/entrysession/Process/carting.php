<?php

// PHP PDO Using Row Count
// get number of data in pdo result

try{
    $pdoConnect = new PDO("mysql:host=localhost;dbname=agriculture","root","");
} catch (PDOException $ex) {
    echo $ex->getMessage();
    exit();
}
$usernameCart = $_SESSION['username'];
$pdoQuery = "SELECT * FROM cart  where `UsernameCart` = '$usernameCart' ";

$pdoResult = $pdoConnect->query($pdoQuery);

$cartcount = $pdoResult->rowCount();


?>
