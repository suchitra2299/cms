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

<form method="post" action="book.php" class="pbook">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >


			<div class="input-group">
		<label>CATEGORY</label>
	   	<select name="categorey" class="xd">
	   		<option value="General Physician">General Physician</option>
	   		<option value="ENT">ENT</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="Psychiatrist">Psychiatrist</option>

	   	</select>


	</div>

	<br>



	<div class="input-group">
		<button type="submit" name="Search" class="btn">SEARCH</button>
	</div>











	<?php  

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);
	
	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>DOCTOR ID</label>
			

		<select class="input-group2" name="docID">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['DoctorID'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<div class="input-groupA">
		<label>APPOINTMENT ID</label>
		<input type="text" name="AppoID" placeholder="Appointment ID:1000-1500">

	</div>




	<div class="input-groupA">
		<label>DATE</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-groupA">
		<label>TIME</label>
		<input type="Time" name="Time">
	</div>
	<br>
	 <div class="input-groupA">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>
	 
	 <?php  
}


	    ?>








</form>





</body>

</html>