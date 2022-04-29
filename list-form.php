<?php
require_once 'config.php';
require_once 'controller.php';

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
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
    <nav class="navtop">
        <div>
            <h1>UniFriend</h1>
            <a href="home.php"><i class="fa-regular fa-house"></i>Home </a>
            <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
    </nav>
    <div class="content">

        <p> Add a new list </p>
        <form action="list-form.php" method="post" autocomplete="off" id="form">
            <div class="form-group">
                <label for="formGroupExampleInput">List Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title of your shopping list"
                    name="title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">List Type</label>
                <input type="text" class="form-control" id="title" placeholder="e.g. shopping list, to-do list, ... "
                    name="type">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter list items</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="text"
                    placeholder="Type here..."></textarea>
                <!-- ADD ADDING USER INPUT INTO ARRAY CODE -->
            </div>

    </div>


    <button type="submit" class="btn btn-primary my-1" style="margin-left: 17%; background-color: #5b6574">Submit</button>
    </form>
    </div>

</body>

</html>

<script>
    $('#form').on('submit', function (e) {
        e.preventDefault();
        console.log($('#form').serialize());
        $.ajax({
            type: 'post',
            url: 'post-list.php',
            data: $('#form').serialize(),
            //success: function () {
            //alert('form was submitted');
        });

    });
</script>