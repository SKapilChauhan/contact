<?php
	include '../config/config.php';
	$name = $_POST['f_name'];
	$email = $_POST['f_email'];
	$mobile = $_POST['f_mobile'];
	$query = $_POST['f_query'];
	$status = 1;	
	$date = date('yy-m-d');
	
	$sql = "Insert into contact (Id, Name, Email, Mobile, Query, Status, CreatedDate) Values ('', '".$name."', '".$email."', '".$mobile."', '".$query."', '".$status."', '".$date."')";
	$result = mysqli_query($conn, $sql);
	echo $result;

?>

