<?php


$servername = "localhost";
$username="root";
$password="";
$dbname="notemarketplace";
//note marketplace
$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn){
     ?>
                <script>
                    alert("Connection ok")
                </script>
            <?php
  

}
else{
    echo"connection no".mysqli_connect_error();
}




?>