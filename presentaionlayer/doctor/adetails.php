<?php include '../../datalayer/bookserver.php '; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style333p.css">

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
	
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Appointment Schedule</h1>

<br>
<br>
<br>
<br>
<br><br><br><br>
		
		
	<form action="adetails.php" method="POST">
		<?php $userid=$_SESSION['DoctorID']; ?>
	<?php include ('../../datalayer/errors.php'); ?>
	
		<div class="input-groupA">
		<label>DATE</label>
		<input type="Date" name="Date">

	</div>

		
		
		<div class="input-groupA">
			<label>FROM TIME</label>
		<input type="Time" name="fTime">
	
		</div>
	
		
		
		<div class="input-groupA">
			<label>TO TIME</label>
		<input type="Time" name="tTime">
	
		</div>

		<div class="input-groupA">
			<label>STATUS</label>
		<select name="status" class="ss">
	   		<option value="Booked">Booked</option>
	   		<option value="UnBooked">UnBooked</option>


	   	</select>
		</div>
		<br>
		<div>
			<button type="type" name="book" class="btns">SCHEDULE</button>
			</div> 
	
		<?php
		
		if(isset($_POST['book']))
		{
		
			
			$connection=mysqli_connect("localhost","root","","registration");
			$doctorid=$_SESSION['DoctorID'];
			
			$date=$_POST['Date'];
			$ftime=$_POST['fTime'];
			$ttime=$_POST['tTime'];
			$status=$_POST['status'];
			
			if(empty($date))
			{
				
				echo "Date is empty";
			}
			
			if (empty($ftime)) {
				echo "From time is empty";
			}
			if(empty($ttime)){
				echo "To time is empty";
			}
			
			else{
			$sql3="INSERT INTO dbook (id,ddate,ftime,ttime,status) VALUES ('$doctorid','$date','$ftime','$ttime','$status') " ;
			if ($mysqli -> query($sql3)) {
				echo "Timing Added";

			}

		
		}
	}

		?>
		
		
		

	


</form>

</body>
</html>




