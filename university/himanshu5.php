<?php

include('db_connect.php');



if(isset($_POST['date11']) && isset($_POST['date22'])){
	$date111=$_POST['date11'];
	$date222=$_POST['date22'];

	$que="SELECT Reason FROM appointmentmaster WHERE AppointmentID=1";
	$con=mysql_query($que);
	$res=mysql_fetch_assoc($con);
	echo implode($res);

	}
	else{
		die("error");
	}
?>