
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
	
<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Book Appointment</h1>
<br>
	<table class="table4">
		<tr>
			<th>Doctor ID</th>
		
		
		<th>Date</th>
	
		<th>From Time</th>
		<th>To Time</th>
		
		
		<th>Doctor Name</th>
		

			<th>Category</th>
			<th>Action</th>
		</tr>
		<?php
		
		
		$connection=mysqli_connect("localhost","root","","registration");

		$sql3="SELECT  * FROM  dbook INNER JOIN doctor ON dbook.id=doctor.DoctorID AND dbook.status='UnBooked'" ;
		$result=mysqli_query($connection, $sql3);
		if(mysqli_num_rows($result)>0)
		{
			while ($row3=mysqli_fetch_row($result)) 
			{
				?>
				<tr>
				<td><?php echo $row3[0] ?></td>
				<td><?php echo $row3[1] ?></td>
				<td><?php echo $row3[2] ?></td>
				<td><?php echo $row3[3] ?></td>
				<td><?php echo $row3[6] ?></td>
				<td><?php echo $row3[11] ?></td>
				<td>
					<form action="bookconf.php" method="post" class="a">
					<input type="hidden" name="id" value="<?php echo $row3[0] ?>">
					<input type="hidden" name="ddate" value="<?php echo $row3[1] ?>">
					<input type="hidden" name="ftime" value="<?php echo $row3[2] ?>">
					<input type="hidden" name="ttime" value="<?php echo $row3[3] ?>">
					
					<button type="submit" name="booka" class="btnn">Book</button> </form> </td>
			</tr>
				<?php }
	
		}
		



			echo "</table";
	


		


		?>
		
</table>

   





    
	

	 	   	
	
  
</form>

	<?php  


	  {
?>
<?php  }
 

?>


</body>
</html>

