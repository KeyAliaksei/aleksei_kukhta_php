<?php
require __DIR__ . '/function.php';
include ('config.php');

$name = "";
$phone = "";
$mail = "";
$message = "";
$country = "";
$urlFiles = "";
$error = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['button'])) {

        if (!empty($_POST["name"])) {
            $name = validFunc($_POST["name"]);
            if (!preg_match("/[A-Za-z]+/", $name)){
                $error = false;
            }
        } else {
            $error = false;
        }

        if (!empty($_POST["tel"])) {
            $phone = $_POST["tel"];
            if (!ctype_digit($phone)){
                $error = false;
            }
        } else {
            $error = false;
        }

        if (!empty($_POST["email"])) {
            $mail = $_POST["email"];
            if (!preg_match("/^[^@\s]+@[^@\s]+\.[^@\s]+$/", $mail)){
                $error = false;
            }
        } else {
            $error = false;
        }

        if (!empty($_POST["message"])) {
            $message = $_POST["message"];
            $message = validMessage($_POST["message"]);
        } else {
            $error = false;
        }

        if (!empty($_POST["residence"])) {
            $country = $_POST["residence"];
        } else {
            $error = false;
        }

        $fileName = "";
        if (isset($_FILES["load_file"])) {
            if ($_FILES['load_file']['error'] == 0 && $_FILES['load_file']['size'] > 0) {
                $fileName = $_FILES['load_file']['name'];
                $urlFiles = "images/$fileName";
                if (!move_uploaded_file($_FILES['load_file']['tmp_name'], $urlFiles)) {
                    $error = false;
                }
            }
        }
    }
} else {
    include("index.php");
}
if ($error == true) {
    $new_data = "INSERT INTO user_book (user, phone, mail, country, message_text, url) VALUES ('$name', '$phone', '$mail', '$country', '$message', '$urlFiles')";
    try {
        // connect to DB
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
        if ($mysqli->connect_errno) {
            die('ERROR: failed connection');
        }
        if (!($mysqli->query($new_data))) {
            die('ERROR: unable to add data');
        }
    } catch (Throwable $e) {
        echo $e->getMessage();
    }
    header("location: index.php");
    exit();
} else {
    echo "Error!";
}
