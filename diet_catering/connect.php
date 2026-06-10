<?php
$host="localhost";
$user= "root";
$pass="";
$db="diet_catering";

$connect = mysqli_connect($host, $user, $pass, $db);
if ($connect){
    // connection successful
    }
    else
    { echo "connection not successful :(";
}

?>