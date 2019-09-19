<!DOCTYPE html>
<html>
<head>
	<title>Regristration Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(images/signupBack.jpg);background-size:cover;">
	
		<div class="form">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<div class="card">
								<div class="card-header text-center bg-dark">
									<h4 style="color:#fff">REGISTRATION FORM</h4>
								</div>
							<div class="card-body">
								<form method="post" action="details.php">
									<?php
											session_start();

											if (isset($_SESSION['error'])) {
												?>

													<div class="alert alert-danger">
														<strong>Enter all required details</strong>
													</div>
												<?php
												unset($_SESSION['error']);
											}

											// else if (condition) {
											// 	# code...
											
											?>
							<div class="row justify-content-center">
								<div class="col-md-5 mr-4">
									<div class="form-group">
										<label for="fn"> Firstname:</label>
										<input class="form-control" type="text" placeholder="Enter Firstname" name="fn" required="">
									</div>
									<div class="form-group">
										<label for="ln"> Lastname:</label>
										<input class="form-control" type="text" placeholder="Enter Lastname" name="ln" required="">
									</div>
									<div class="form-group">
										<label for="dept"> Department:</label>
										<input class="form-control" type="text" placeholder="Enter Department" name="dept" required="">
									</div>
									
									<div class="form-group">
										<label for="matric"> Matric No:</label>
										<input class="form-control" type="text" placeholder="Enter Matric No" name="matric" required="">
									</div>
									<div class="form-group">
										<label for="lvl"> Level:</label>
										<input class="form-control" type="text" placeholder="Enter Level" name="lvl" required="">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label for="sex"> Gender:</label>
										<select class="form-control" name="sex" required="">
											<option>Select Gender</option>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
									<div class="form-group">
										<label for="mobl"> Mobile No:</label>
										<input class="form-control" type="text" placeholder="Enter Mobile No." name="mobl" required="">
									</div>
									<div class="form-group">
										<label for="addr"> Address:</label>
										<textarea class="form-control" type="text" placeholder="Enter Address" name="addr" required=""></textarea>
									</div>
									<div class="form-group">
										<label for="bGroup"> Blood Group:</label>
										<input class="form-control" type="text" placeholder="Enter Blood Group" name="bGroup" required="">
									</div>
									<div class="form-group">
										<label for="pw"> Password:</label>
										<input class="form-control" type="Password" placeholder="Enter Password!" name="pw" required="">
									</div>
								</div>
							</div>
									<div class="row justify-content-center">
										<input class="btn btn-primary" type="submit" name="Submit">
									</div>
								</form>
							</div>


							</div>
						</div>
					</div>	
				</div>
			</div>
		
</body>
</html>