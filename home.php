<?php
require_once 'config.php';

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit();
}
?>

<!DOCTYPE html>
<html>

<head>
	<?php require_once 'headers.php'; ?>
	<style>
		/* makes the css actually work */
		<?php include "style.css"?>
	</style>
</head>

<body class="loggedin">
	<?php require_once 'nav-bar.php'; ?>
	<nav class="navtop" style="background-color: #f7b100">
		<div>
			<h1>UniFriend</h1>
			<a href="home.php"><i class="fa-regular fa-house"></i>Home </a>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<script src="clock.js" class="clock"> </script> 
	<div class="content">
		

		<!-- toaster here 
		<div class="toast" data-autohide="false">
			<div class="toast-header">
				<svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
					preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
					<rect fill="#007aff" width="100%" height="100%" /></svg>
				<strong class="mr-auto">Bootstrap</strong>
				<small class="text-muted">11 mins ago</small>
				<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>

		<script>
			$(document).ready(function () {
				$(".toast").toast({
					
					delay: 10000;
				});
				
			});
		</script>


		 ends here -->


		<h3 style="margin-bottom: 13%">Welcome back, <?=$_SESSION['name']?>!</h3>
		<p> <a href="events.php">Your events </a> </p>
		<p> <a href="calendar.php"> Your calendar </a> </p>
		<p> <a href="lists.php">Your lists </p>
		<p> <a href="planners.php">Your planners </p>
	</div>
	<br> <br>
	<footer> Ⓒ Unifriend 2022 </footer>

</body>

</html>