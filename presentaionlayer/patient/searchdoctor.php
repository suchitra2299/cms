<?php include '../../datalayer/bookserver.php'; ?>
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
			
			<li><a href="searchdoctor.php">Search Doctor</a></li>
			<li><a href="treatment.php">Treatment Details</a></li>
			<li><a href="feedback.php">Feedback</a></li>
			
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>
<h2 style="font-size: 15px;font-style: 'Times New Roman';margin-left: 90%">USER:<?php $userid=$_SESSION['UserID'];
	echo "$userid"; ?></h2>
	
<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Search Doctor</h1>
	
<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-groupA">
		<label style="font-weight: bold;">DOCTOR ID</label>
		
		<input type="text" name="dID" >

	</div>
<br>
	<div class="input-group">
		<button type="submit" name="Search" class="btnd">SEARCH</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         

         ?>	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php  

		if (isset($_POST['Search'])) {
		$dID =$mysqli -> real_escape_string($_POST['dID']);
		if (empty($dID)) {
			echo "Enter Doctor ID";
		}
		else
		{
		$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if($result6->num_rows==0)
		{
			echo "Wrong Doctor ID";
		}
		else
		{
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["DoctorID"]."</td><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table>";
	
}

		}
		}
	}?>
 </table>
				
	


</body>
</html>


