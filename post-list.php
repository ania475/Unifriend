<?php

echo json_encode($_POST);

if (isset($_POST)){
    $_POST['title'] ? $mytitle= $_POST['title']."list title" : false; //if the information stored in the title var reaches the server, a var called my title is created, otherwise, it returns false
    echo $_POST['type'];
    echo $_POST['text'];
    $myarray = array();
    array_push($myarray, $title, $type, $text);
    echo json_encode($myarray);
    
}
?>