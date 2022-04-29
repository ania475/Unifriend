<?php
require_once 'config.php';

require_once 'controller.php';

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lists</title>
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
			<h2>Your lists, <?=$_SESSION['name']?> </h2>
			<div>
				<p>All the lists you have created.</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
                    </a>
                <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
            <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Some placeholder content in a paragraph.</p>
            <small class="text-muted">And some muted small print.</small>
            </a>
            </div>
		
			</div>
            <a href="list-form.php" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">Create new list</a>
		</div>
	</body>
</html>