<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5555ad.css">

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
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Appointments </h1>
	<br>
	<table class="table4">
		<tr>
		<th>Appointment ID</th>
		<th>Date</th>
		<th>From Time</th>
		<th>To Time</th>
		<th>Patient ID</th>
		<th>Doctor ID</th>
		<th>Appointment Status</th>
		
		
		
		

		</tr>

		<?php
		$connection=mysqli_connect("localhost","root","","registration"); 
		$sql3=mysqli_query($connection,"SELECT  * FROM  bookapp ") ;
		if(mysqli_num_rows($sql3)==0){
			
		}
		else
		{


			while ($row3=mysqli_fetch_row($sql3)) {

				echo "<tr><td>".$row3[0]."</td><td>".$row3[1]."</td><td>".$row3[2]."</td><td>".$row3[3]."</td><td>".$row3[4]."</td><td>".$row3[5]."</td><td>".$row3[6]."</td></tr>";
			}


			
	


		}

		?>
		

		
		
		
	</table>
	   
   
</body>
</html>