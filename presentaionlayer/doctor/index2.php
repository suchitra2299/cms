
<?php include ('../../datalayer/server.php'); ?>
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
		


		
		<ul > 
			
		
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
<body >
	<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">DOCTOR:<?php $doctorid=$_SESSION['DoctorID'];
	echo "$doctorid"; ?></h2>
	

	<h1 style="margin-left:38% ;margin-top:80px"   class="asd">My Information</h1>
<br>




		
		

		
		<?php
		$doctorid=$_SESSION['DoctorID'];
		
		$connection=mysqli_connect("localhost","root","","registration");

		$sql3=mysqli_query($connection,"SELECT  * FROM  doctor WHERE DoctorID=('$doctorid') ") ;
		
		if(mysqli_num_rows($sql3)==0){
			echo "no rows returned";
		}
		else
		{


			while ($row3=mysqli_fetch_row($sql3)) {?>
				<table class="table5">
					<tr class="trr">
		<th class="thh">Doctor ID</th>
		<td class="thh"><?php echo "$row3[0]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Doctor Name</th>
		<td class="thh"><?php echo "$row3[1]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Email</th>
		<td class="thh"><?php echo "$row3[2]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Address</th>
		<td class="thh"><?php echo "$row3[3]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Contact Number</th>
		<td class="thh"><?php echo "$row3[4]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Password</th>
		<td class="thh"><?php echo "$row3[5]"; ?></td>
	</tr>
	<tr class="trr">
		<th class="thh">Category</th>
		<td class="thh"><?php echo "$row3[6]"; ?></td>
					
					
				
</table>
				
				<?php
			}


			
	


		}

		?>
		



 



	
        
           
	


  


	






</body>
</html>