<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style22p.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href="bookapp.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			<li><a href="treatment.php">Treatment Details</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">USER:<?php $userid=$_SESSION['UserID'];
	echo "$userid"; ?></h2>
	
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">My Appointment</h1>
<br>
	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>TIME</th>
		<th>Patient ID</th>
		<th>Doctor ID</th>
		<th>Appointment Status</th>
		<th>Appointment Info</th>
		
		

		</tr>
		<?php
		$userid=$_SESSION['UserID'];
		
		$connection=mysqli_connect("localhost","root","","registration");

		$sql3=mysqli_query($connection,"SELECT  * FROM  bookapp , doctor WHERE patientID=('$userid') AND  docID=DoctorID  ") ;
		
		if(mysqli_num_rows($sql3)==0){
			
		}
		else
		{


			while ($row3=mysqli_fetch_row($sql3)) {

				echo "<tr><td>".$row3[0]."</td><td>".$row3[1]."</td><td>".$row3[2]."</td><td>".$row3[3]."</td><td>".$row3[4]."</td><td>".$row3[5]."</td><td>".$row3[6]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
	<h1 style="margin-left:31% ;margin-top:80px"   class="asd">Cancel Appointment</h1>

<form method="post" action="view.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-groupA">
		<label>APPOINTMENT ID</label>
		<input type="text" name="appoid" >

	</div>
<br>
	<div class="input-groupA">
		<button type="submit" name="cancel" class="btn">CANCEL</button>
	</div>

	







<?php 
	$connection=mysqli_connect("localhost","root","","registration");
	if(isset($_POST['cancel']))
	{
		$appoid=$_POST['appoid'];
		if(empty($appoid))
		{
			echo "Enter ID";
		}
		else{
		$query5="DELETE FROM bookapp WHERE AppoID=('$appoid') ";
		
		if ($mysqli -> query($query5)){

			if ($mysqli->affected_rows==0)
			 {
			 echo "Wrong Appointment ID";
			
			# code...
		}
	  else {
	  
	  echo "Appointment is Canceled";
	  


	  }
	}
}

}
	?>
	
</form>
<!--	<table class="table3">
		<tr>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>
		doctor.Doctorname , doctor.Address,doctor.ContactNumber,doctor.category
,doctor
AND docID= ('$userprofile')
.$row3["Doctorname"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3["category"]

		</tr>
		<?php $sql4="SELECT doctor.Doctorname,doctor.Address,doctor.ContactNumber,doctor.category FROM doctor " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Doctorname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["category"]."</td></tr>";
			}
			echo "</table";


	


		}

		?>
		
	</table>


-->


</body>
</html>

