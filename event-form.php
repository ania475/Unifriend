
<?php
require_once 'config.php';
require_once 'controller.php';

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
/*//Check if the fields have been completed
if ( !isset($_POST['title'], $_POST['date'], $_POST['time']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill the Title, Date and Time fields to add your event!');
} */

?>

<!DOCTYPE html>
<html>
	<head>
		<?php require_once 'headers.php'; ?>
        <style> /* makes the css actually work */
            <?php include "style.css" ?>
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
			
			<p> Add new event </p>
            <form action="event-form.php" method="post" autocomplete="off" id="form">
                <div class="form-group">
                    <label for="formGroupExampleInput">Event Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title of your event" name="title">
                </div>
                
                 <div class="form-group"> Date input
                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="time" class="form-control" id="time" name="time" />
                </div> 
                <div class="form-group">
                    <label for="formGroupExampleInput2">Location</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="location" placeholder="Where is your event happening?">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Duration</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="duration" placeholder="How long does your event last? (optional)">
                </div> 
                <button type="submit" class="btn btn-primary my-1" style="background-color:#5b6574">Submit</button>
            </form>
		</div> 

	</body>
</html>

<script> 
    $('#form').on('submit', function(e) {
                e.preventDefault();
                console.log($('#form').serialize());
            $.ajax({
                type: 'post',
                url: 'post-event.php',
                data: $('#form').serialize(),
                //success: function () {
                //alert('form was submitted');
                }
            );

            });
</script> 