<?php

require_once 'config.php';
require_once 'controller.php';


// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	/*header('Location: index.php', ,301);*/
	header('Location: index.php');
	exit();
}


?>

<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'headers.php'; ?>
        <style> /* makes the css actually work */
            <?php include "style.css" ?>
        </style>
	</head>
	<body class="loggedin">
	
		<nav class="navtop">
			<div>
				<h1>UniFriend</h1>
				<a href="home.php"><i class="fa-regular fa-house"></i>Home </a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			
			<p> Your shopping list </p>
            <?php  
            //NEED TO SHOW DATA FROM ARRAY AKA SHOPPING LIST ITEMS HERE
			/*
               if(!(isset($_POST['txt0']))) {
                    echo 'Please add at least 1 item to your list';
                }
                $var=$_POST['txt$i'];
                print "<ul>";
                print "<li> $data <br> </li>";
                print "</ul>"; 
				*/
            ?> 

		</div>

	</body>
</html>