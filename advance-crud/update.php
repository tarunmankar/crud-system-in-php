
<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>

<div class="container col-lg-6 mt-4" >
    <form method="post"> 
      <fieldset>
        <legend>Registration Form</legend>
                
                <?php
                   $id=$_GET['id']; 
                   $query="SELECT * FROM user WHERE id='$id'";
                   $result=mysqli_query($conn, $query);
                   $row=mysqli_fetch_assoc($result); 
                ?>

        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $row['name']?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $row['email']?>">
        </div>
        
        <div class="form-group">
          <label for="exampleInputMobile1">Mobile No</label>
          <input type="text" class="form-control" id="exampleInputMobile1" name="mobile" value="<?php echo $row['mobile']?>">
        </div>
        
        <input type="submit" class="btn btn-primary" name="submit" value="UPDATE">
        </fieldset>
    </form>
</div>
<div class="mb-4"></div>
<?php include("includes/footer.php"); ?>

<?php
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $id=$_GET['id'];

    $query="UPDATE user SET name='$name', email='$email', mobile='$mobile' WHERE id='$id'";
    $result=mysqli_query($conn, $query);
    if($result)
    {
      session_start();
      $_SESSION['data'] = "Data is Updated successfully";
      header('location: index.php');
    }
  }
?>