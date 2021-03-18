<?php

$servername="localhost";
$username="root";
$password="";
$dbname="note marketplace";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	
	echo"connection Ok";
	
}
else{
	
	echo"connection Failed";
	
}

?>