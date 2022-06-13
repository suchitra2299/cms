<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if (isset($_POST['Book'])) {

	


	$userid=$_SESSION['UserID'];
	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$FTime= $mysqli -> real_escape_string($_POST['FTime']);
	$TTime=$mysqli -> real_escape_string($_POST['TTime']);
	$status= $mysqli -> real_escape_string($_POST['status']);
	
	if (empty($AppoID)) {
	array_push($errors,"Appointment ID is required");
}
else{
	if (!preg_match("/^([1000-1500]{3})$/", $AppoID)) {
	array_push($errors,"Enter a valid Appointment ID");
}

}


if (empty($Date)) {
	array_push($errors,"Date is required");
	# code...
}


if (empty($Time)) {
	array_push($errors,"Time is required");
	# code...
}


if(count($errors)==0){


    $docID = $_REQUEST['docID'];
	$sql = "INSERT INTO  bookapp (AppoID, Date, Time, patientID,docID) VALUES ('$AppoID','$Date','$Time','$userid','$docID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d Booked .\n", $mysqli->affected_rows);


 

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d Can't Book At The Moment.\n", $mysqli->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="you are now logged in";
  header('location:book.php');


 

}

}






if (isset($_POST['Add'])) {

	



	$addID 				= $mysqli -> real_escape_string($_POST['addID']);
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);





	


if (empty($addname)) {
	array_push($errors,"Doctor Name is required");
	# code...
}





if (empty($addAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($addContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}
else{
	if (!preg_match("/^([0-9]{10})$/", $addContactNumber)) {
	array_push($errors,"Enter a valid Contact Number");
}

}



if (empty($addEmail)) {
	array_push($errors,"Email is required");
	# code...
}
else{
	if(filter_var($addEmail, FILTER_VALIDATE_EMAIL)==false){
	array_push($errors,"Enter a valid Email");
}
}


if (empty($addPassword)) {
	array_push($errors,"Password is required");
	# code...
}
else{
	if (strlen($addPassword) < 6) {
	array_push($errors, "Password must be 6 characters in length");	
}
}












if(count($errors)==0){

		$addcategory 	= $_REQUEST['addcategory'];


	$sqladd = "INSERT INTO  doctor (DoctorID, Doctorname, email, Address, ContactNumber, password,categorey) VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";



	if ($mysqli -> query($sqladd)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);


 
}


  $_SESSION['addID']=$addID;
  $_SESSION['success']="you are now logged in";
  header('location:index3.php');





}
	


	# code...
}



if (isset($_POST['Delete'])) {

		$deleteID =$mysqli -> real_escape_string($_POST['deleteID']);

	if (empty($deleteID))
	{
	array_push($errors,"Doctor ID is required");
	}
 	if (count($errors)==0) {
 




	$querydelete="DELETE FROM doctor WHERE DoctorID='$deleteID' ";
	if ($mysqli -> query($querydelete)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"Wrong Doctor ID");
			
			# code...
		}
		



	}
	  else {
	  
	  echo 'Book is Canceled';
	  


	  }

	}
}














?>

<!-- $query1="SELECT categorey FROM doctor";
   $result1= mysqli_query($mysqli, $query1);
   $opt="<select name='Categorey'>";
   while ($row= mysqli_fetch_assoc($result1)) {
   	$opt.="<option value ='{$row['categorey']}'>{$row['categorey']}</option>";
   }
   	$opt.="</select>";
   

 

  
   }

}
-->


