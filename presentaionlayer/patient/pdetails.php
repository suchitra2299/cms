<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style22.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="pdetails.php">Appointment Details</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			<li><a href="treatment.php">Treatment Details</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Appointment Update</h1>

		
		
	<form action="" method="POST" class="pd">
		<div class="input-groupA">
			<label>APPOINTMENT ID</label>
			<input type="text" name="appid">
		</div>
		<br>
		<br>
		<div class="input-groupA">
		<label>APPOINTMENT DATE</label>
		<input type="Date" name="Date">
	   </div>
		<br>
		<br>
		<div class="input-groupA">
		<label>APPOINTMENT TIME</label>
		<input type="Time" name="Time">
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
			$adate=$_POST['Date'];
			$atime=$_POST['Time'];
			if (empty($id)) {
				echo "Enter ID";
			}
			if (empty($adate)) {
				echo "Enter date";
			}
			if (empty($atime)) {
				echo "Enter time";
			}
			else
			{	
			$sql3="UPDATE bookapp SET Date='".$adate."', Time ='".$atime."' WHERE AppoID=('$id') " ;
			
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

