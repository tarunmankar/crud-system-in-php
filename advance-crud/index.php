<?php include("includes/header.php"); ?>
<?php include("includes/connection.php"); ?>
<div class="container col-lg-6 mt-4" >
    <?php
        session_start();
	    if(isset($_SESSION['data']))
	    {
	      echo "<h1>".$_SESSION['data']."</h1>";
	      unset($_SESSION['data']);
	    }
    ?>
    <br>
    <a class="btn btn-success mb-3" href="insert.php">Insert Data</a>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile No</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
<?php
 $query="SELECT * FROM user";
 $result=mysqli_query($conn, $query);
 while($row=mysqli_fetch_assoc($result)) { ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id'] ?></th>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
      </tr>
    </tbody>
<?php } ?>
  </table>
  <div class="mb-4"></div>
<?php include("includes/footer.php"); ?>