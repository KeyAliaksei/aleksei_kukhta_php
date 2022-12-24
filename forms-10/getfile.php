<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get_file</title>
</head>
<body>
    <?php
    if (isset($_POST['send_file'])){
        echo 'Download file:<br>';
        var_dump($_FILES);
        echo '<br>';
        if ($_FILES['load_file']['error'] == 0) {
            echo 'Moving file<br>';
            if (move_uploaded_file($_FILES['load_file']['tmp_name'], $_FILES['load_file']['name'])) {
                print "Success<br>";
                exit();
            }
        }
    }
    echo 'Error! <br>';
    ?>
    <a href="form.php"><em>FORM</em></a><br>
</body>
</html>