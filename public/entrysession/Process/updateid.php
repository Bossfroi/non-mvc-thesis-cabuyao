<?php
$db = mysqli_connect('localhost', 'root', '', 'agriculture');
$selectquery="SELECT id FROM cart ORDER BY id DESC LIMIT 1";
$result = $db->query($selectquery);
$row = $result->fetch_assoc();
$idcart = $row['id'];

$selectquery1="SELECT UsernameCart FROM cart ORDER BY id DESC LIMIT 1";
$result1 = $db->query($selectquery1);
$row1 = $result1->fetch_assoc();
$cart = $row1['UsernameCart'];

?>
