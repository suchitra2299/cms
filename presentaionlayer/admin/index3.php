<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5555ad.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="home.php">Dashboard</a></li>
			<li><a href="index3.php">Manage Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			
			<li><a href="feedback.php">FeedBack</a></li>

  			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">ADMIN</h2>
<h1 style="margin-left:40% ;margin-top:80px"   class="asd">Manage Doctor</h1>
<br><br><br><br><br>
		<div class="headerA">
	<h2>Add Doctor</h2>
</div>

<form method="post" action="index3.php" class="add">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>DOCTOR ID</label>
		<input type="text" name="addID" value="<?php print rand(1100,1500); ?>" readonly>

	</div>


	<div class="input-groupA">
		<label>DOCTOR NAME</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>ADDRESS</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>CONTACT NUMBER</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>EMAIL ADDRESS</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>PASSWORD</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>CATEGORY</label>
	   	<select name="addcategory" class="xd">
	   		<option value="General Physician">General Physician</option>
	   		<option value="ENT">ENT</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="Psychiatrist">Psychiatrist</option>

	   		


	   	</select>
	   	<br>
	   	</div>
	   	<br>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">INSERT</button>
	</div>


	




</form>
<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>DOCTOR ID</label>
		<input type="text" name="deleteID" >

	</div>
	<br>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">DELETE</button>
	</div>

</form>	



	

</body>
</html>