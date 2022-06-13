<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style333.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href="adetails.php">Appointment Timings</a></li>
			<li><a href="doctortime.php">View Timing</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">DOCTOR:<?php $doctorid=$_SESSION['DoctorID'];
	echo "$doctorid"; ?></h2>
	
	<h1 style="margin-left:38% ;margin-top:80px"   class="asd">My Timings</h1>
	<br><br>

	<table class="table2">
		<tr>
		
		<th>Date</th>
		<th>From Time</th>
		<th>To Time</th>
		<th>Status</th>
		
		
		

		</tr>
		<?php
		$doctorid=$_SESSION['DoctorID'];
		
		$connection=mysqli_connect("localhost","root","","registration");

		$sql3=mysqli_query($connection,"SELECT  * FROM  dbook WHERE id=('$doctorid') ") ;
		
		if(mysqli_num_rows($sql3)==0){
			
		}
		else
		{


			while ($row3=mysqli_fetch_row($sql3)) {

				echo "<tr><td>".$row3[1]."</td><td>".$row3[2]."</td><td>".$row3[3]."</td><td>".$row3[4]."</td></tr>";			}


			
	


		}

		?>
		
		
	</table>

</body>
</html>

