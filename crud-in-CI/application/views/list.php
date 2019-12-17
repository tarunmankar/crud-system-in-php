<!DOCTYPE html>
<html>
<head>
	<title>Crud Application</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
   <div class="container">
   	  <a href="<?php echo base_url().'index.php/users'?>"  class="navbar-brand">CRUD Application</a>
   </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-8">
     
      <?php
      $success=$this->session->userdata('success');
      if($success!="")
	      {
	        echo $success;
	      }
      ?>

    </div>
  </div>
  <div><td><a href="<?php echo base_url().'index.php/users/create'?>" class="btn btn-success mt-2 mb-2">Insert Data</a></td></div>
<div class="col-lg-8">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Created At</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
 <?php
foreach($users as $user) { ?>
    <tr>
      <th scope="row"><?php echo $user['user_id'] ?></th>
      <td><?php echo $user['name'] ?></td>
      <td><?php echo $user['email'] ?></td>
      <td><?php echo $user['created_at'] ?></td>
      <td><a href="<?php echo base_url().'index.php/users/update/'.$user['user_id'] ?>" class="btn btn-success">Update</a></td>
      <td><a href="<?php echo base_url().'index.php/users/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
</div>
</div>

</body>
</html>