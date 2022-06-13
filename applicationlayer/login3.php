<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html class="ht">
<head class="ht">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="styleadm.css">
</head>
<body class="Abody" style="background-image: url('../images/loga.jpg');margin-right: 0px;margin-top:0px;background-repeat: no-repeat;background-size: cover;">

	<h1 style="margin-left: 60%;font-family: 'Times New Roman'">MEDIXO</h1>
	<div class="Aheader" style="margin-left: 50%;margin-top: 100px;">
	<h2 style="font-family: 'Times New Roman'">Admin Login</h2>

</div>

<form method="post" action="login3.php" class="Aform" style="margin-left: 50%">
	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div>

<br>



	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">


<br><br><br>
	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> LOGIN</button>
	
	</div>

	

	




	
	




</form>

</body>
</html>