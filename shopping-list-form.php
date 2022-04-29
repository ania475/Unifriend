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
    <style>
        /* makes the css actually work */
        <?php include "style.css"?>
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

        <p> Add new shopping list </p>
        <form action="shopping-list-form.php" method="post" autocomplete="off" id="form">
            <div class="form-group">
                <label for="formGroupExampleInput">List Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title of your shopping list"
                    name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter shopping items</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="text" placeholder="Type here..."></textarea> 
                <!-- ADD ADDING USER INPUT INTO ARRAY CODE -->
                <?php 
                   /* print "<form method='post' action='list-complete.php'";

                    for($i=0;$i<10;$i++) {
                        print "<input type=text name='txt$i' size=50 />";
                        print "<br>";
                    }
                    print "<input type=submit value=Submit />";
                    print "</form>";

                    $arr=array();
                    if(isset($_POST['txt0'])) {
                        for($i=0;$i<10;$i++) {
                            $arr[$i]=$_POST['txt'.$i]; //each element of the array is each user text input 
                            $data=$arr[$i];

                        }
                        print "<pre>";
                        echo $data;
                        print "</pre>"; 
                        
                    }*/

                    ?>

            </div>

            <button type="submit" class="btn btn-primary my-1" style="background-color:#5b6574">Submit</button>
            <!--<button type="submit" class="btn btn-primary my-1"
                onClick="Javascript:window.location.href = 'list-complete.php';">Submit</button> -->
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
                url: 'post-shopping-custom-list.php',
                data: $('#form').serialize(),
                //success: function () {
                //alert('form was submitted');
                }
            );

            });
</script> 