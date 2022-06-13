<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style33.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href="details.php">Appointment Details</a></li>
			<li><a href="adetails.php">Appointment Timings</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">DOCTOR:<?php $doctorid=$_SESSION['DoctorID'];
	echo "$doctorid"; ?></h2>
	
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Appointment Details</h1>

<br>
<br>
<br>
<br>
<br><br><br><br>
		
		
	<form action="details.php" method="POST">
	<?php include ('../../datalayer/errors.php'); ?>
		<div class="input-groupA">
			<label>APPOINTMENT ID</label>
			
			<input type="text" name="appid">
		</div>
		<br>
		
		<div class="input-groupA">
		<label>APPOINTMENT STATUS</label>
		
		<select name="Status" class="xd">
	   		<option value="Confirm">Confirm</option>
	   		<option value="Pending">Pending</option>
	   		<option value="Cancel">Cancel</option>
	   		

	   	</select>
	   </div>
		<br>
		
		<div class="input-groupA">
		<label>APPOINTMENT INFO</label>
		
		<textarea name="Info" placeholder="Appointment Information.." class="xd"></textarea>
		</div>
		<br>
		<br>
		<div class="input-groupA">
		<input type="submit" name="update">
		</div>
	
		
		<?php
		
		if(isset($_POST['update']))
		{
		
		
			$connection=mysqli_connect("localhost","root","","registration");
			$id=$_POST['appid'];
			$astatus=$_POST['Status'];
			$ainfo=$_POST['Info'];
			if(empty($id))
			{
				
				echo "ID is empty";
			}
			
			if (empty($ainfo)) {
				echo "info is empty";
			}
			else{
			$sql3="UPDATE bookapp SET status='".$astatus."', info='".$ainfo."' WHERE AppoID=('$id') " ;
			
		if($connection->query($sql3)==TRUE)
			{
				echo "Updated";
			}
			else
			{


			echo "Updation Failed";		
			}

		}
	}

		?>
		
		
		

	


</form>

</body>
</html>

