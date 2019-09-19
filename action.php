<?php
	$con = mysqli_connect('localhost', 'root', '', 'firstclass');



		$fn = $_POST['fn'];
		$ln = $_POST['ln'];

		

		$q = mysqli_query($con, "INSERT INTO user_tb(Firstname, Lastname) VALUES ('$fn', '$ln') ");

		if ($q) {
			echo $fn." ".$ln."<br> Registration Successful";
		}

		else {
			echo "Something went wrong";
		}
	
?>