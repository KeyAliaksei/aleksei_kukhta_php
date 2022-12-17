<?php

function getPage(){
    $page = intval($_GET['page'] ?? 1);
    if ($page < 1){
        die("the requested page does not exist");
    }
    return $page;
}

function checkPageNumbers($page, $countPages) : bool {
    return $page <= $countPages;
}

function getDatabase($page, $itemsPerPage) : int {
    return ($page - 1) * $itemsPerPage;
}

function getPagesCount(int $countRows, int $itemsPerPage) : int {
    $pagesCount = ceil($countRows/$itemsPerPage);
    if($pagesCount == 0) {
        $pagesCount = 1;
    }
    return $pagesCount;
}

function pageCounter($page, $countPages) {
    $html = '';
    for ($i = 1; $i <= $countPages; $i++){
        if ($i == $page){
            $html .= "$i ";
        } else {
            $html .= "<a href ='?page=$i'>&nbsp;$i&nbsp;</a>";
        }
    }
    return $html;
}