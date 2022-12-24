<?php
include ('config.php');
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $new_data = "INSERT INTO user_messages (user, message_text) VALUES ('$name', '$message')";
    try {
// connect to DB
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
        if ($mysqli->connect_errno) {
            die('ERROR: failed connection');
        }
        if (!($mysqli->query($new_data))) {
            die('ERROR: unable to add data');
        }
    } catch (Throwable $e){
        echo $e->getMessage();
    }
    header ("location: index.php");
    exit();
} else {
    include ('form.php');
}
*/
if (isset ($_POST["button"])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    $new_data = "INSERT INTO user_messages (user, message_text) VALUES ('$name', '$message')";
    try {
// connect to DB
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
        if ($mysqli->connect_errno) {
            die('ERROR: failed connection');
        }
        if (!($mysqli->query($new_data))) {
            die('ERROR: unable to add data');
        }
    } catch (Throwable $e){
        echo $e->getMessage();
    }
} else {
    include ('form.php');
}

