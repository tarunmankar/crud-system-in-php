<!DOCTYPE html>
<html>
<head>
	<title>List of Record</title>
</head>
<body>
	<h1>List of Record</h1>
	<button><a href="form.php">Insert Data</a></button>
    <table border="1">
    	<tr>
    		<th>Id</th>
    		<th>Name</th>
    		<th>Mobile</th>
    		<th>Email</th>
    		<th>Delete</th>
    		<th>Edit</th>
    	</tr>

<?php
$db=mysqli_connect('localhost','root','','basic_crud');
$query="SELECT * FROM users";
$result=mysqli_query($db, $query);
while($row=mysqli_fetch_assoc($result)) 

{ ?>

   <tr>
	    <td><?php echo $row['id'] ?></td>	
	    <td><?php echo $row['name'] ?></td>
	    <td><?php echo $row['mobile'] ?></td>
	    <td><?php echo $row['email'] ?></td>	
	    <td><button><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></button></td>		
	    <td><button><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></button></td>		
    </tr>
<?php } ?>
    </table>
</body>
</html>