<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>

<div class="container col-lg-6 mt-4" >

<form action="insert.php"method="post">
  
  <fieldset>
    <legend>Registration Form</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
    </div>
    
    <div class="form-group">
      <label for="exampleInputMobile1">Mobile No</label>
      <input type="text" class="form-control" id="exampleInputMobile1" placeholder="mobile" name="mobile">
    </div>
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </fieldset>
</form>
</div>
<div class="mb-4"></div>
<?php include("includes/footer.php"); ?>

<?php
if(isset($_POST['submit'])){
      $name=$_POST['name'];
	  $email=$_POST['email'];
	  $mobile=$_POST['mobile'];
	  
	  $query="INSERT INTO user(name, email, mobile) VALUES('$name', '$email', '$mobile')";
	  $result=mysqli_query($conn, $query);

	  if($result)
	  {
	    session_start();
	    $_SESSION['data'] = "Data is submited successfully";
	    header('location: index.php');
	  }
}