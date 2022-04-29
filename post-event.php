<?php

echo json_encode($_POST);

if (isset($_POST)){
    $_POST['title'] ? $mytitle= $_POST['title']."event title" : false; //if the information stored in the title var reaches the server, a var called my title is created, otherwise, it returns false
    echo $_POST['time'];
    echo $_POST['date'];
    echo $_POST['location'];
    echo $_POST['duration'];
    $myarray = array();
    array_push($myarray, $title, $time, $date, $location, $duration);
    echo json_encode($myarray);
    
}
?>