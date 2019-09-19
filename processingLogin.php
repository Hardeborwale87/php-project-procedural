<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'firstclass');
	$matric = $_POST['matric'];
	$pw = $_POST['pw'];

	$studInfo = mysqli_query($con, "SELECT * FROM user_tb WHERE MatricNo='$matric' AND Password='$pw'");
	$myRow = mysqli_fetch_array($studInfo);

	$correctMatric = $myRow['MatricNo'];
	$correctPassword = $myRow['Password'];


	if ($correctMatric == $matric && $correctPassword == $pw) {
		echo "Login Successful";
	}
	/* else if ($correctPassword = $pw) {
		echo "Login ";
	 }
*/
	else{
		$_SESSION['error'] = true;
		header('location:login.php');
	};
?>