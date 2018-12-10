<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eseedhr";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>