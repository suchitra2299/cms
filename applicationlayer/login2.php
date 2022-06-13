<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="style4docd.css">
</head>
<body class="Dbody" style="background-image: url('../images/logd.jpg');">
	<h1 style="font-family: 'Times New Roman'">MEDIXO</h1>
	<br>
	<div class="Dheader">
	<h2 style="font-family: 'Times New Roman'">Doctor Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label style="font-family: 'Times New Roman';font-size: 20px;">Doctor ID</label>
		<input type="text" name="doctorID">

	</div>
<br>



	<div class="input-groupD">
		<label style="font-family: 'Times New Roman';font-size: 20px;">Password</label>
		<input type="Password" name="doctorpassword">

</div>
<br><br>
	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> LOGIN</button>
	</div>

	
	




</form>

</body>
</html>