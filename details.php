<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'firstclass');



		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$dept = $_POST['dept'];
		$matric = $_POST['matric'];
		$lvl = $_POST['lvl'];
		$sex = $_POST['sex'];
		$mobl = $_POST['mobl'];
		$addr = $_POST['addr'];
		$bGroup = $_POST['bGroup'];
		$pw = $_POST['pw'];

		

		$q = mysqli_query($con, "INSERT INTO user_tb(Firstname, Lastname, Department, MatricNo, Level, Gender, MobileNo, Address, BloodGroup, Password) VALUES ('$fn', '$ln', '$dept', '$matric', '$lvl', '$sex', '$mobl', '$addr', '$bGroup', '$pw') ");

		if ($q != "") {
			echo $fn." ".$ln."<br> Registration Successful";
			header('location:login.php');
			// echo $fn." ".$ln."<br> Registration Successful";
		}
		else if($q == ""){
			$_SESSION['error'] = true;
			header('location:signUp.php');
		}

		else {
			echo "Something went wrong";
		}
	
?>