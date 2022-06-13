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
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd">Dashboard</h1>
	<br>
		<div class="div" style="margin-top: 200px; ">
			
			<label class="lab" style="margin-left: 100px">TOTAL APPOINTMENTS:
			
			<?php 
			$connection=mysqli_connect("localhost","root","","registration"); 
				$sql3="SELECT * FROM bookapp";
				if ($result=mysqli_query($connection,$sql3)) {
					$rowcount=mysqli_num_rows($result);
				}
				echo "$rowcount";
			?>
			</label>
		
		<label class="lab" style="margin-left: 100px">TOTAL DOCTORS:
			<?php 
			$connection=mysqli_connect("localhost","root","","registration"); 
				$sql3="SELECT * FROM doctor";
				if ($result=mysqli_query($connection,$sql3)) {
					$rowcount=mysqli_num_rows($result);
				}
				echo "$rowcount";
				?>
			</label>
				<label class="lab" style="margin-left: 100px">TOTAL PATIENTS:
			<?php 
			$connection=mysqli_connect("localhost","root","","registration"); 
				$sql3="SELECT * FROM patients";
				if ($result=mysqli_query($connection,$sql3)) {
					$rowcount=mysqli_num_rows($result);
				}
				echo "$rowcount";
			?>
		</label>
		</div>
		

</body>
</html>