<?php include '../../datalayer/bookserver.php'; ?>
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
	
<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Search Patient</h1>

	
<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		
		<label style="font-weight: bold,font-style:'Times New Roman'">PATIENT ID</label>
		
		<input type="text" name="PID" >

	</div>
<br>
	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">SEARCH</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?><br><br>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>

		<tr>
		<th>PatientID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>BloodGroup</th>


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);
		if(empty($PID))
		{
			echo "Enter Patient ID";
		}
		else
		{


		
		$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if($resultP->num_rows==0)
		{
			echo "Wrong Patient ID";
		}
		else
		{


		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}


			echo "</table";
	


		}
	
	
	}?>
 </table>
 <br>
 <br>
			<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Treatment Details</caption>

		<tr>
		<th>PatientID</th>
		<th>Name</th>
		<th>Treatment</th>
		<th>Note</th>
		<th>Doctor ID</th>
		


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  description   WHERE 	descID=('$PID') OR descName=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)>0){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["descID"]."</td><td>".$rowP["descName"]."</td><td>".$rowP["treatment"]."</td><td>".$rowP["Note"]."</td><td>".$rowP["doctorIDdesc"]."</td></tr>";
			}


			echo "</table";
	


		}
		}
	}
	}?>
 </table>
	


</body>
</html>


