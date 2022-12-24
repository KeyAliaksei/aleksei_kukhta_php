<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forms-10</title>
</head>
<body>
<?php
include ('config.php');
require __DIR__ . '/functions.php';

try {
// connect to DB
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
    if ($mysqli->connect_errno) {
        die('ERROR: failed connection');
    }
// determine the number of rows in DB
    $sql = 'SELECT COUNT(*) FROM user_messages';
    if (!($result = $mysqli->query($sql))) {
        die('ERROR: calculation failed');
    }
    $countRows = $result->fetch_row()[0];
    $itemsPerPage = 2;
    $countPages = getPagesCount($countRows, $itemsPerPage);

    $page = getPage();

    if (!checkPageNumbers($page, $countPages)) {
        die("the requested page does not exist");
    }

// getting the necessary data from the DB
    $k = getData($page, $itemsPerPage);
    $sql = "SELECT * FROM user_messages ORDER BY id DESC LIMIT $k, $itemsPerPage";
    if (!($result = $mysqli->query($sql))) {
        die('ERROR: unable to get data');
    }
    $data = $result->fetch_all(MYSQLI_ASSOC);

// data output
    foreach ($data as $row){
        echo $row['id'] . '. ' . $row['user'] . ' - ' . $row['message_text'] . '(' . $row['message_time'] . ') <br>';
    }
} catch (Throwable $e){
    echo $e->getMessage();
}
?>
<a href="form.php"><em>FORM</em></a><br>
<?php
echo $html = pageCounter($page, $countPages);
?>
</body>
</html>