<?php

function getPage(){
    $page = intval($_get['page'] ?? 1);
    if ($page < 1){
        die("the requested page does not exist");
    }
    return $page;
}

function getPagesCount(int $itemsCount, int $itemsPerPage) : int {
    $pagesCount = ceil($itemsCount/$itemsPerPage);
    if($pagesCount == 0) { //если данных нет
        $pagesCount = 1; //то одна страница, хоть и пустая, все равно должна быть
    }
    return $pagesCount;
}

function checkPageNumbers($page, $countPages) : bool {
        return $page <= $countPages;
    }

function getDatabase($page, $itemsPerPage) : int {
    return ($page - 1) * $itemsPerPage;
}

function getSliceData($textArray, $firstNumber, $itemsPerPage) : array {
    return array_slice($textArray, $firstNumber, $itemsPerPage);
}

function pageCounter($page, $countPages){
    $html = '';
    for ($i = 1; $i <= $countPages; $i++){
        if ($i == $page){
            $html .= "$i ";
        } else {
            $html .= "<a href =' ?page = {$i}'>$i</a>";
        }
    }
    return $html;
}

// 2 часть задания
function changing($firstLetter) : string {
    return "<b>".$firstLetter."</b>";
}