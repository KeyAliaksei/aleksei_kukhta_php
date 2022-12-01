<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays</title>
</head>
<body>
<h1>Task_1</h1>
<!--1. Определить произведение элементов массива, расположенных между максимальным и минимальным элементами.-->
<?php
for ($i = 0; $i < 10; $i++){
    $array[$i] = rand(1, 50); // создаем массив случайных чисел
}
echo '<pre>';
print_r($array);
echo '</pre>';

$arrMin = min($array);
$arrMax = max($array); // создаем переменные с min и max значениями
$keyMin = array_search($arrMin, $array);
$keyMax = array_search($arrMax, $array); // определяем индекс переменной

echo '<pre>';
print $keyMin. '<br>';
print $keyMax;
echo '</pre>';

if ($keyMin < $keyMax){
    $array = array_slice($array, $keyMin, $keyMax);
}elseif ($keyMin > $keyMax){
    $array = array_slice($array, $keyMax, $keyMin);
}else{
    echo 'no numbers to calculate';
}

echo '<pre>';
print_r($array);
echo '</pre>';

$product = 1;
for ($i = 1; $i < count($array) - 1; $i++){
    $product *= $array[$i];
}
echo '<h3>The product of numbers is: </h3>' .$product;
?>

<h1>Task_2</h1>
<!--2. Преобразовать массив таким образом, чтобы в первой его половине располагались элементы, стоявшие в исходном
массиве на нечетных позициях (1, 3, 5, ...), а во второй половине — элементы, стоявшие на четных позициях (0, 2, 4, ...)-->
<?php
$array = [0, 1, 2, 3, 4, 5, 6, 7];
echo '<pre>';
print_r($array);
echo '</pre>';

$count = count($array);
for ($i = 0; $i < $count - 4; $i++){
    if ($i % 2 == 0){
        $evenValue = $array[$i];
        $oddValue = $array[$i + 1];
        $array[$i] = $oddValue;
        $array[$i + 1] = $evenValue;
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';
?>
<h1>Task_3</h1>
<!--3. В двумерном массиве определить номера столбцов, не содержащих ни одного нулевого элемента, и вычислить произведения
элементов каждого из этих столбцов.-->
<?php
$array = [[1, 5, 0, 3], [5, 1, 2, 0]];
$prodValue = 1;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++) {
        if ($array[$i][$j] != 0) {
            $prodValue *= $array[$i][$j];
        }
    }
}
echo 'product(array) =' .$prodValue;
?>
</body>
</html>