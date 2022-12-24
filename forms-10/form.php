<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
<form action="form_data.php" method="POST">
    <h2><b>Leave_a_review</b></h2>
    <fieldset>
        <legend>Guestbook_form</legend>
        <input type="text" name="name" style="margin-bottom:10px;" required pattern="[A-Za-z]+">
        <label for="text">&#42;&nbsp;User_name</label><br>
        <textarea name="message" lang="eng" maxlength="250" placeholder="250 symbols" required pattern="[A-Za-z]+"></textarea>
        <label for="text">&#42;&nbsp;Message</label><br>
        <button type="submit" name="button" style="margin-top:3px;">SEND</button>
    </fieldset>
</form>
<form enctype="multipart/form-data" action="getfile.php" method="post">
    <h2><b>Add_task</b></h2>
    <fieldset>
    <legend>Upload_files:</legend>
    <input type="file" name="load_file"><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="65535">
    <button type="submit" name="send_file" value="Send_file" style="margin-top:3px;">Download</button>
    </fieldset>
</form>
<a href="index.php"><em>Return to index.php</em></a><br>
</body>
</html>