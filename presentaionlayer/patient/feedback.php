
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
	
<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Feedback</h1>
	<form action="" method="POST" class="feedb">
		<div class="input-groupA">
			<label>PATIENT NAME</label>
			<input type="text" name="pname">
		</div>
		
		
		<div class="input-groupA">
		<label>FEEDBACK</label><textarea name="feedback" placeholder="Write something.." class="xd"></textarea>
		</div>
		<br>
		
		<div class="input-groupA">
		<input type="submit" name="submit" style="font-size: 18px;border:0px solid red;font-style:'Times New Roman';background-color: white">
		</div>


		<?php
		$connection=mysqli_connect("localhost","root","","registration");
		if(isset($_POST['submit']))
		{
			$userid=$_SESSION['UserID'];
			$pname=$_POST['pname'];
			$feed=$_POST['feedback'];
			if (empty($pname)) {
				echo "Enter Name";
			}
			if (empty($feed)) {
				echo "Enter Feedback";
			}
			else
			{	
			$sql3=mysqli_query($connection,"insert into feedback values('$userid','$pname','$feed') ") ;
			if($sql3)
			{
				echo "feedback posted successsfully";
			}
			else
			{
				echo "failed";
			}
		
		}
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







		