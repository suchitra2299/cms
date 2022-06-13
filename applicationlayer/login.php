<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="styleppp.css">
</head>
<body style="background-image: url('../images/logp.png');">
	<h1 style="font-family: 'Times New Roman';margin-left: 43%;margin-top: 30px;">MEDIXO</h1>
	<div class="header">
	<h2>Patient Login</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>




	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">
</div><br>


	<div class="input-group">
		<button type="submit" name="Login" class="btn"> LOGIN</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
	




</form>

</body>
</html>