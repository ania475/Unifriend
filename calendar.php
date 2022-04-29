<?php

require_once 'config.php';

require_once 'controller.php';

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();

//setting up the time zone for the calendar

date_default_timezone_set('Europe/London');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today
$today = date('Y-m-j', time());

// For H3 title
$html_title = date('Y / m', $timestamp);

// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
// You can also use strtotime!
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);
 
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
//$str = date('w', $timestamp);


// Create Calendar!!
$weeks = array();
$week = '';

// Add empty cell
$week .= str_repeat('<td></td>', $str);

for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym . '-' . $day;
     
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

} 

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Profile Page</title>
		<?php require_once 'headers.php'; ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
        <style> /*makes the css actually work */
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
			<h2>Your calendar, <?=$_SESSION['name']?> </h2>
			<div>
				<h3> <a href="?ym=<?php echo $prev; ?>"> &lt; </a> 
                    <?php echo $html_title; ?>
                    <a href="?ym=<?php echo $next; ?>"> &gt; </a> 
                </h3> 
                <br> 
                <table class="table table-dark">
                    <tr> 
                        <th> S </th> 
                        <th> M </th> 
                        <th> T </th> 
                        <th> W </th> 
                        <th> T </th>
                        <th> F </th>  
                        <th> S </th> 
                    </tr>
                    <?php 
                        foreach ($weeks as $week) {
                            echo $week;
                        }
                        ?>
            </table> <br>
			</div>
            
            <a href="event-form.php" class="btn btn-secondary btn-lg" role="button" aria-pressed="true">Create new event</a>
		</div>
	</body>
</html>