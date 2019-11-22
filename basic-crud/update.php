<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA</title>
</head>
<body>
	<?php
	$id=$_GET['id'];
	$db=mysqli_connect('localhost','root','','basic_crud');
    $query="SELECT * FROM users where id='$id'";
    $result=mysqli_query($db, $query);
    $row=mysqli_fetch_assoc($result); 
    ?>
 <h1>UPDATE DATA</h1>
	<form method="post">
		Name<input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
		Mobile Number<input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"><br>
		Email Id<input type="text" name="email" value="<?php echo $row['name'] ?>"><br>
		<input type="submit" name="submit" value="UPDATE">
	</form>

<?php 
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];

		$db=mysqli_connect('localhost','root','','basic_crud');
		$query="UPDATE users SET name='$name', mobile='$mobile', email='$email' WHERE id='$id'";
		$result=mysqli_query($db, $query);
			if($result)
			{
				header('location: index.php');
			}
	}
?>
</body>
</html>