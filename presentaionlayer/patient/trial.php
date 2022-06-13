<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style22.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>MEDIXO</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="pdetails.php">Appointment Details</a></li>
			<li><a href="searchdoctor.php ">Search Doctor</a></li>
			<li><a href="treatment.php">Treatment Details</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	

	


	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="trial.php" class="pbook">

<?php include ('../../datalayer/errors.php');?>

	<div>
		<label>Appointment ID</label>
		<input type="text" name="AppoID">
	</div>

	
			

	<br>

<div class="input-groupA">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>

	
<?php
$mysqli = new mysqli("localhost","root","","registration");
if (isset($_POST['Book'])) 
{

	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	

if(empty($AppoID))
	{
		echo "empty";
}
else{
    
	$sql = "INSERT INTO  book (AppoID) VALUES ('$AppoID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysqli->affected_rows);


 

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 
	}
}
?>





	



	 









</form>





</body>

</html>