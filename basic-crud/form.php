<!DOCTYPE html>
<html>
<head>
	<title>INSERT DATA</title>
</head>
<body>
 <h1>Insert Data</h1>
	<form action="form.php" method="post">
		Name<input type="text" name="name"><br>
		Mobile Number<input type="text" name="mobile"><br>
		Email Id<input type="text" name="email"><br>
		<input type="submit" name="submit">
	</form>

<?php 
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];

		$db=mysqli_connect('localhost','root','','basic_crud');
		$query="INSERT INTO users(name,mobile,email) VALUES('$name','$mobile','$email')";
		$result=mysqli_query($db, $query);
			if($result)
			{
    	            header('location: index.php');
            }
			else
			{
				echo "Something went wrong";
			}
	}
?>
</body>
</html>