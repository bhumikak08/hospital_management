<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $aadhar_no = $_POST['aadhar_no'];
	 $p_name = $_POST['p_name'];
	 $p_age = $_POST['p_age'];
	 $p_gender = $_POST['p_gender'];
	 $p_contact = $_POST['p_contact'];
     $p_weight = $_POST['p_weight'];
     $d_special = $_POST['d_special'];
	 $p_bg=$_POST['p_bg'];
     $sql = "INSERT INTO patient (aadhar_no,p_name,p_age,p_gender,p_contact,p_weight,d_special,p_bg)
	 VALUES ('$aadhar_no','$p_name','$p_age','$p_gender','$p_contact','$p_weight','$d_special','$p_bg')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>