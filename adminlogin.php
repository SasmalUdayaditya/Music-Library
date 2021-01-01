<?php
session_start();

$con = mysqli_connect('localhost','root');

if($con){
	
}else{
	echo "Connection Failed";
}

?>

<!Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
</head>
<body>
	<header>
		<div class="container center-div shadow">
			<div class="heading text-center mb-5">Admin Login Page</div>
			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-2">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email ID</label>
							<input type="Email" name="aduser" placeholder="Enter mail id" class="form-control" autocomplete="off">	
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" placeholder="Enter password" class="form-control" autocomplete="off">	
						</div>

						<input type="submit" class="btn btn-success" name="submit">
					</form>
				</div>

			</div>

		</div>
	</header>


</body>
</html>
