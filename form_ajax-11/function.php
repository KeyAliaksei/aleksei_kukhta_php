<?php
function validFunc ($validValue) {
    $validValue = trim($validValue);
    $validValue = strip_tags($validValue);
    if (ctype_alpha($validValue)){
        return $validValue;
    } else {
        echo 'error symbols!';
    }
    return $validValue;
}

function validMessage ($validMess) {
    $validMess = strip_tags($validMess);
    if (strlen($validMess) > 250){
        echo "limit is exceeded";
    }
    return $validMess;
}
