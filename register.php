<?php
session_start();
echo "<html>";
echo "<Title> Register </Title>";
$link_home="http://localhost/phplogin/index.php";
echo "<a href='$link_home' class='btn btn-success btn-lg active' role='button' aria-pressed='true'>Home</a> ";
echo "<br>";
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'krrF]#W.3!@BJxr';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS);
mysqli_select_db($con, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

/*$name=$_POST['username'];
$pass=$_POST['password'];
$s="SELECT * FROM ACCOUNTS WHERE USERNAME='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1) {
	echo 'Username already taken. Choose another one.';
} else {
	$reg=" INSERT INTO ACCOUNTS (USERNAME, PASSWORD) VALUES ('$name','$pass')";
	mysqli_query($con,$reg);
	echo 'Registration successful!!';
}*/






// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}



//check if the email actually exists
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}
//check if the characters in the username are valid
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('Username is not valid!');
}

//check if password has enough characters
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) { 
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesnt exist, insert new account
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email /* ,activation_code*/) VALUES (?, ?, ?)')) {
	    // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //the password_hash line encrypts the user's password
	    //$uniqid = uniqid(); //GENERATES UNIQUE CODE WHICH WILL BE SENT TO THE USER TO ACTIVATE THEIR ACCOUNT
        $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);//, $uniqid);

	    $stmt->execute(); 
       /* //GENERATES AUTOMATIC EMAIL TO ACTIVATE ACCOUNT --- AMAZING STUFF!!
	    $from    = 'noreply@unifriend.com';
        $subject = 'Account Activation Required';
        $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        // Update the activation variable below
        $activate_link = 'http://unifriend.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
        $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
        mail($_POST['email'], $subject, $message, $headers); */
		$username=$_POST['username'];
        echo "Thank you for registering $username.";}
	else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
        }
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}

$con->close(); 
?>