<?php
$hostname="localhost";
$username="root";
$password="";
$database="crud2";
$conn=mysqli_connect($hostname, $username, $password, $database);
if($conn==false){
   echo "Database in not connected";	
}

?>