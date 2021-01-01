<?php 
session_start();
if(!isset($_SESSION['aduser']))
{
	header("Location:adminlogin.php");
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
		<div class="container  shadow">
						
				<div class="adheading text-center mb-3">Hello <?php echo $_SESSION['aduser']?>, YOU ARE INSIDE ADMIN PAGE NOW !!</div>
				<div class="txt text-center">Perform Operations</div>
				<div  class="d-flex flex-row justify-content-center pb-2"><a href="admin-viewsongs.php" class="btn btn-primary">View Songs</a></div>
				<!-- <div  class="d-flex flex-row justify-content-center pb-2"><a href="admin-addsongs.php" class="btn btn-primary">Add Songs</a></div>
				<div  class="d-flex flex-row justify-content-center pb-2"><a href="admin-deletesongs.php" class="btn btn-primary">Delete Songs</a></div> -->

				<div  class="d-flex flex-row justify-content-center pb-2"><a href="admin-viewusers.php" class="btn btn-primary">View User Deatils</a></div>
				<div  class="d-flex flex-row justify-content-center pb-2"><a href="admin-logout.php" class="btn btn-danger">Logout</a></div>

				
			</div>
	</header>
</body>
</html>