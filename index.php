<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2_(if)</title>
    <style>
        .green {
            color: green;
        }
        .yellow {
            color: coral;
        }
        .red {
            color: red;
        }
    </style>
</head>
<body>

<h1>Task_1</h1>
    <?php
/*
Задание 1. Напишите скрипт, которой для числа $x выводит его значение разным цветом:
зеленым – если $x положительно
желтым – если $x равно 0
красным – если $x отрицательно
*/
    $x=5;
    if ($x>0) {
          echo "<p class='green'>$x</p>";
      }
    if ($x<0) {
            echo "<p class='yellow'>$x</p>";
        }
    if ($x==0) {
            echo "<p class='red'>$x</p>";
        }
    ?>

<h1>Task_2</h1>
<?php
// Задание 2. Напишите скрипт, определяющий сумму максимального и минимального из трех чисел $a, $b, $c.
    $a=1;
    $b=7;
    $c=6;
    if ($a>$b&&$b>$c){
        echo $a+$c;
    }
    elseif ($b>$a&&$a>$c){
        echo $b+$c;
    }
    elseif ($c>$a&&$a>$b){
        echo $c+$b;
    }
    elseif ($a>$c&&$c>$b){
        echo $a+$b;
    }
    elseif ($c>$b&&$b>$a){
        echo $c+$a;
    }
    elseif ($c<$b&&$c>$a){
        echo $b+$a;
    }
    else {
        echo 'error';
    }
?>

<h1>Task_3</h1>
<?php
// Задание 3. Напишите скрипт, определяющий максимальное из четырех чисел $a, $b, $c, $d.
    $a=6;
    $b=4;
    $c=13;
    $d=2;
    if ($a>$b&&$a>$c&&$a>$d){
     echo $a;
    }
    elseif ($b>$c&&$b>$d) {
            echo $b;
        }
    elseif ($c>$d){
       echo $c;
    }
    else {
        echo $d;
    }
?>

<h1>Task_4</h1>
<?php
/*
Задание 4. Известны длина и ширина сумки $a, $b, а также длина и ширина товара $c, $d.
Напишите скрипт, определяющий, можно ли товар упаковать в сумку. Предусмотреть возможность ввода
длины и ширины в произвольном порядке, например, 20, 30 или 30, 20.
Усложнение задачи: добавьте еще высоту сумки и высоту товара. Учтите, что товар можно повернуть.
*/
$a=230; // ширина сумки
$b=21; // длина сумки
$x=60; // высота сумки

$c=29; // ширина товара
$d=20; // длина товара
$y=140; // высота товара

// находим параметры сумки
   if ($a>$b&&$b>$x){
       $maxSize=$a;
       $averageSize=$b;
       $minSize=$x;
   }
   elseif ($b>$a&&$a>$x){
       $maxSize=$b;
       $averageSize=$a;
       $minSize=$x;
   }
   elseif ($x>$a&&$a>$b){
       $maxSize=$x;
       $averageSize=$a;
       $minSize=$b;
   }
   elseif ($x>$b&&$b>$a){
       $maxSize=$x;
       $averageSize=$b;
       $minSize=$a;
   }
   elseif ($a>$x&&$x>$b) {
       $maxSize=$a;
       $averageSize=$x;
       $minSize=$b;
   }
// находим параметры товара
    if ($c>$d&&$d>$y){
        $maxProd=$c;
        $averageProd=$d;
        $minProd=$y;
    }
    elseif ($d>$c&&$c>$y){
        $maxProd=$d;
        $averageProd=$c;
        $minProd=$y;
    }
    elseif ($y>$c&&$c>$d){
        $maxProd=$y;
        $averageProd=$c;
        $minProd=$d;
    }
    elseif ($y>$d&&$d>$c){
        $maxProd=$y;
        $averageProd=$d;
        $minProd=$c;
    }
    elseif ($c>$y&&$y>$d) {
        $maxProd=$c;
        $averageProd=$y;
        $minProd=$d;
    }
    // упаковываем!

    if ($maxSize>$maxProd&&$averageSize>$averageProd&&$minSize>$minProd){
        echo 'упакован';
    }
    else {
        echo 'не упакован';
    }
?>
</body>
</html>