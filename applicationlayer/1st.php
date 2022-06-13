<?php include('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="styleppp.css">
</head>
<body style="background-image: url('../images/logp.png');">
	<h1 style="font-family: 'Times New Roman';margin-left: 43%;margin-top: 30px;">MEDIXO</h1>
	<div class="header">
	<h2>Registeration</h2>
</div>

<form method="post" action="1st.php" enctype="multipart/form-data">

	<?php include ('../datalayer/errors.php'); ?>	

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID" value="<?php print rand(100,500); ?>" readonly>

	</div>


	<div class="input-group">
		<label>User Name</label>
		<input type="text" name="Name" >


	</div>

	<div class="input-group">
		<label>Address</label>
		<input type="text" name="Address">

	</div>

	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="ContactNumber">


	</div>


	<div class="input-group">
		<label>Email ID</label>
		<input type="text" name="Email">

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">

	</div>
	<div class="input-group">
		<label>Blood Type</label>
		<input type="text" name="bloodtype">

	</div>

	<br>
   

	<div class="input-group">
		<button type="submit" name="Register" class="btn">REGISTER</button>
	</div>


	<p>
		Already a member? <a href="login.php">Sign in </a>
	</p>
	




</form>

</body>
</html>
