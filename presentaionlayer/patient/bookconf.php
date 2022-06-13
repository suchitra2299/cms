
<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style22p.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</h1>
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
	
	<h1 style="margin-left:30% ;margin-top:80px"   class="asd">Confirm Appointment</h1>
<form action="bookconf.php" method="post">
	<div class="input-groupA">
		<label>Appointment ID</label>
		<input type="text" name="AppoID" value="<?php print rand(1000,5000); ?>" readonly>
	</div>
<div class="input-groupA">
		<label>DOCTOR ID</label>
		<input type="text" name="docID" value="<?php
	if(isset($_POST['booka']))
	{
		$docID=$_POST['id'];
		echo $docID;
	}
?>" readonly>

	</div> 	
	
	 <div class="input-groupA">
		<label>DATE</label>
		<input type="text" name="Date" value="<?php
	if(isset($_POST['booka']))
	{
		$Date=$_POST['ddate'];
		echo $Date;
	}
?>" readonly>

	</div> 	
	 <div class="input-groupA">
		<label>FROM TIME</label>
		<input type="text" name="FTime" value="<?php
	if(isset($_POST['booka']))
	{
		$FTime=$_POST['ftime'];
		echo $FTime;
	}
?>" readonly>

	</div> 	
	 <div class="input-groupA">
		<label>TO TIME</label>
		<input type="text" name="TTime" value="<?php
	if(isset($_POST['booka']))
	{
		$TTime=$_POST['ttime'];
		echo $TTime;
	}
?>" readonly>

	</div> 	
	 <div class="input-groupA">
		<label>STATUS</label>
		<select name="status" class="ss">
	   		<option value="Booked">Booked</option>
	   		
	   	</select>
	</div> 
	<br><br>	
<div>
	<button type="submit" name="boook" class="btn">Book</button>
</div>	
	<?php 
	if (isset($_POST['boook'])) 
	{
		

			$userid=$_SESSION['UserID'];
			$AppoID=$_POST['AppoID'];
			$docID=$_POST['docID'];
			$Date=$_POST['Date'];
			$FTime=$_POST['FTime'];
			$TTime=$_POST['TTime'];
			$status=$_POST['status'];
			$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
			

			


			$sql=$mysqli->query("INSERT INTO `bookapp`(`AppoID`, `Date`, `FTime`, `TTime`, `patientID`, `docID`, `status`) VALUES ('$AppoID','$Date','$FTime','$TTime','$userid','$docID','$status')") ;
			$sqql=$mysqli->query("UPDATE dbook SET status='".$status."' WHERE ftime=('$FTime') ");

		

		

		if ($sql && $sqql) {

  echo "Appointment Booked";
}

	else {
  echo "not booked";
	 } 

			}
	
	?>

</form>	
</body>
</html>

