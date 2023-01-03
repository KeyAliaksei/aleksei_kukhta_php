<?php
function validFunc ($validValue) {
    $validValue = trim($validValue);
    $validValue = strip_tags($validValue);
    if (ctype_alpha($validValue))
    return $validValue;
}

function validMessage ($validMess) {
    $validMess = strip_tags($validMess);
    if (strlen($validMess) < 250)
    return $validMess;
}
