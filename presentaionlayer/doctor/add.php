<?php include ('../../datalayer/bookserver.php'); ?>
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
			<li><a href="searchpatient.php">Search Patient</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">DOCTOR:<?php $doctorid=$_SESSION['DoctorID'];
	echo "$doctorid"; ?></h2>
	
<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Patient Description</h1>

<form method="post" action="add.php" class="add">







	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label style="font-weight: bold, font-style:'Times New Roman'">PATIENT ID</label>
	   	<input type="text" name="Patientsearch" class="xd">


	</div>
<br>




	<div class="input-group">
		<button type="submit" name="SearchPA" class="btn">SEARCH</button>
	</div>











	<?php  



	  if (isset($_POST['SearchPA'])) {

	$Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	if(empty($Patientsearch))
	{
		echo "Enter Patient ID";
	}
	else{
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);
	if ($result2->num_rows==0) {
		echo "Wrong Patient ID";
	}
	
	
		
	while ($row2=mysqli_fetch_assoc($result2)) {
?>

<div class="input-group">
		<label>PATIENT ID</label>
		<input type="text" name="descID" value="<?php echo $row2['UserID']; ?>" readonly>

	</div>




	<div class="input-group">
		<label>PATIENT NAME</label>
		<input type="text" name="descName" value="<?php echo $row2['Name']; ?>" readonly>

	</div>

	<div class="input-group">
		<label>TREATMENT</label>
		<input type="text" name="Treatment">
	</div>

	<div class="input-group-add">
		<label>NOTE</label>
		<input style="" type="text" name="Note">
	</div>

<br>
	 <div class="input-group">
			<button type="submit" name="AddD" class="btna">ADD</button>
			</div>


	<?php  

	}
}
	 ?>

			 </div>
	 
		
	   
	  
	 

	 
	
	  
<?php 
}


	    ?>




	    <?php  
$doctorid=$_SESSION['DoctorID'];

if (isset($_POST['AddD'])) {
	include ('../../datalayer/errors.php');
	    	$errors=array();

	$descID 			= $mysqli -> real_escape_string($_POST['descID']);
	$descName 			= $mysqli -> real_escape_string($_POST['descName']);
	$treatment 			= $mysqli -> real_escape_string($_POST['Treatment']);
	$note				= $mysqli -> real_escape_string($_POST['Note']);

	
	







if (empty($treatment)) {
	echo "Diagnosis is required";
	# code...
}

if (empty($note)) {
	echo "Diagnosis Note is required"."\n";
	# code...
}









else{


	$sql7 = "INSERT INTO  description (descID,descName,treatment,note,doctorIDdesc) VALUES ('$descID','$descName','$treatment','$note','$doctorid') ";
	if ($mysqli -> query($sql7)) { ?>

	<?php echo "Patient Description Added"; ?> 
			
			
		<?php 



	}
	}

}














?>









</form>





</body>

</html>