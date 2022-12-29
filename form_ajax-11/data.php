<?php
require __DIR__ . '/function.php';
include ('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = "";
    $phone = "";
    $mail = "";
    $message = "";
    $country = "";
    $urlFiles = "";
    if (isset($_POST['button'])) {

        if (!empty($_POST["name"])) {
            $name = validFunc($_POST["name"]);
            if (!preg_match("/[A-Za-z]+/", $name)){
                echo "error_name<br>";
            }
        } else {
            echo "error_name<br>";
        }

        if (!empty($_POST["tel"])) {
            $phone = $_POST["tel"];
            if (!ctype_digit($phone)){
                echo 'error_phone';
            }
        } else {
            echo "error_tel<br>";
        }

        if (!empty($_POST["email"])) {
            $mail = $_POST["email"];
            if (!preg_match("/^[^@\s]+@[^@\s]+\.[^@\s]+$/", $mail)){
                echo "error_email<br>";
            }
        } else {
            echo "error_email<br>";
        }

        if (!empty($_POST["message"])) {
            $message = $_POST["message"];
            $message = validMessage($_POST["message"]);
        } else {
            echo "error_message";
        }

        if (!empty($_POST["residence"])) {
            $country = $_POST["residence"];
        } else {
            echo "residence_can't_be_empty<br>";
        }

        $fileName = "";
        if (isset($_POST["load_file"])) {
            if ($_FILES['load_file']['error'] == 0) {
                $sendFile = 'png';
                $checkType = ['gif', 'png', 'jpeg', 'jpg'];
                if (!in_array($sendFile, $checkType)) {
                    echo 'Error! Uncorrected type of files';
                } else {
                    $fileName = md5_file($_FILES['load_file']['name']) . '.' . $sendFile;
                    $urlFiles = "/images/$fileName";
                    if (move_uploaded_file($_FILES['load_file']['tmp_name'], $urlFiles)) {
                        print "Success<br>";
                    } else {
                        echo 'Error! File not loaded!<br>';
                    }
                }
            }
        } else {
            echo 'Error! File not loaded!<br>';
        }
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
        include("index.php");
    }
}
