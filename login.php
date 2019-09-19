<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(images/signupBack.jpg);">
	
					<div class="row justify-content-center">
						<div class="col-md-4">
							<div class="card shadow-lg">
							
								<div class="card-header text-center bg-dark">

									<h4 style="color:#fff">LOGIN FORM</h4>
								</div>
								<div class="card-body">
									<div class="container">
										<?php
											session_start();

											if (isset($_SESSION['error'])) {
												?>

													<div class="alert alert-danger">
														<strong>Incorrect Matric Number or password</strong>
													</div>
												<?php
												unset($_SESSION['error']);
											}

											
											?>
								<form method="POST" action="processingLogin.php">
									<div class="form-group">
										<label for="matric"> Matric Number:</label>
										<input class="form-control" type="text" placeholder="Enter Matric Number" name="matric" required="">
									</div>
									<div class="form-group">
										<label for="pw">Password:</label>
										<input class="form-control" type="password" placeholder="********" name="pw" required="">
									</div>
									<div>
										<button class="btn btn-danger">LOGIN</button>
									</div>
									<div class="mt-3">
										<span>No account? <a href="signUp.php" class="link-info">Sign up</a></span><span class="float-right"><a href=""> Forget Password?</a></span>
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