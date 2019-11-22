<?php 
  include("includes/connection.php"); 
  $id=$_GET['id']; 
  $query="DELETE FROM user WHERE id='$id'";
  $result=mysqli_query($conn, $query);
  if($result)
  {
    session_start();
    $_SESSION['data'] = "Data DELETED successfully";
    header('location: index.php');
  } 
?>
