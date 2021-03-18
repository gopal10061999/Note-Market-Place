<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="note marketplace";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    
    echo "Connection ok";
}
else{
    echo"connection no".mysqli_connect_error();
}

?>