<?php
$host = "localhost";
$db_name = "agriculture";
$username = "root";
$password = "";
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}",$username,$password);
} catch (PDOException  $exception) {
echo "Error";
}


  $conn = mysqli_connect('localhost', 'root', '', 'agriculture');
    define('DBINFO','mysql:host=localhost;dbname=agriculture');
    define('DBUSER','root');
    define('DBPASS','');
    function performQuery($query2){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query2);
    if($stmt->execute()){
            return true ;
        }else{
            return false;
        }
    }
    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }


?>
