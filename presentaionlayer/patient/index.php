
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
<body >
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">USER:<?php $userid=$_SESSION['UserID'];
	echo "$userid"; ?></h2>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">My Information</h1>

<br>
		<?php
		$userid=$_SESSION['UserID'];
		
		$connection=mysqli_connect("localhost","root","","registration");

		$sql3=mysqli_query($connection,"SELECT  * FROM  patients WHERE UserID=('$userid') ") ;
		
		if(mysqli_num_rows($sql3)==0){
			echo "no rows returned";
		}
		else
		{


			while ($row3=mysqli_fetch_row($sql3)) { ?>
				<table class="table4">
		<tr>
			<th class="thh">User ID</th>
			<td class="thh"><?php echo "$row3[0]"; ?></td>
		</tr>
		<tr>
		<th class="thh">Name</th>
		<td class="thh"><?php echo "$row3[1]"; ?></td>
	</tr>
	<tr>
		<th class="thh">Address</th>
		<td class="thh"><?php echo "$row3[2]"; ?></td>
	</tr>
	<tr>
		<th class="thh">Contact Number</th>
		<td class="thh"><?php echo "$row3[3]"; ?></td>
	</tr>
	<tr>
		<th class="thh">Email</th>
		<td class="thh"><?php echo "$row3[4]"; ?></td>
	</tr>
	<tr>
		<th class="thh">Password</th>
		<td><?php echo "$row3[5]"; ?></td>
	</tr>
	<tr>
		<th class="thh">Blood Type</th>
		<td class="thh"><?php echo "$row3[6]"; ?></td>
		

		</tr>

				<?php	}


			echo "</table";
	


		}

		?>
		
	

   





    
	

	 	   	
	
  
</form>

	<?php  


	  {
?>
<?php  }
 

?>


</body>
</html>

