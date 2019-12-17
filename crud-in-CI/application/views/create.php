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

<div class="row d-flex justify-content-center mt-5">
	<div class="col-xl-6">
		<form action="<?php echo base_url().'index.php/users/create'?>" method="POST">
		  <fieldset>
		    <div class="control-group">
		      <label class="control-label"  for="name">Name</label>
		      <div class="controls">
		        <input type="text" id="name" name="name" placeholder="Insert Name" class="form-control">
		        <?php echo form_error('name') ?>
		      </div>
		    </div>
		 
		    <div class="control-group mb-2">
		      <label class="control-label" for="email">E-mail</label>
		      <div class="controls">
		        <input type="email" id="email" name="email" placeholder="Insert E-mail" class="form-control">
		        <?php echo form_error('email') ?>
		      </div>
		    </div>
		 
		    <div class="control-group">
		      <div class="controls">
		        <input type="submit" name="submit" value="Insert Data" class="btn btn-success">
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>
</div>

</body>
</html>