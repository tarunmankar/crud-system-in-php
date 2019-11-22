<?php
    $id=$_GET['id'];
    $db=mysqli_connect('localhost','root','','basic_crud');
    $query="DELETE FROM users WHERE id='$id'";
    $result=mysqli_query($db, $query);
    if($result){
    	header('location: index.php');
    }

?>