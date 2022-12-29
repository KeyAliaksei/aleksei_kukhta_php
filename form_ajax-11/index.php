<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form_ajax-11</title>
</head>
<body>
<form action="data.php" method="POST" enctype="multipart/form-data">
    <h2><b>Guestbook</b></h2>
    <fieldset>
        <legend>User_book</legend>
        <input type="text" name="name" style="margin-bottom:10px;" placeholder="30 symbols" required pattern="[A-Za-z]+" value="">
        <label for="text">&nbsp;User_name</label><br>

        <input type="tel" name="tel" maxlength="12" style="margin-bottom:10px;" placeholder="375291234567"
               pattern="[0-9]+" required value="">
        <label for="phone">&nbsp;Phone</label><br>

        <input type="email" name="email" style="margin-bottom:10px;" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" required value="">
        <label for="email">&nbsp;Email</label><br>

        <input type="radio" name="residence" value="resident">Resident<br>
        <input type="radio" name="residence" value="foreigner">Foreigner<br>

        <textarea name="message" maxlength="250" placeholder="250 symbols" required></textarea>
        <label for="text">&nbsp;Message</label><br>

        <input type="file" name="load_file"><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="65535">

        <button type="submit" name="button" id="button" style="margin-top:3px; margin-bottom:10px;">SEND</button><br>
        <input type="reset" value="Reset">
    </fieldset>
</form>
</body>
</html>