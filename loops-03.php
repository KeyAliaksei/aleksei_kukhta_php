<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cycles</title>
    <style>
        html, body {
            height: 100%;
        }
        table {
            margin-left: 47%;
            text-align: center;
            border: 5px black;
        }
        h1 {
            text-align: center;
        }
        td, tr, th {
            width: 50px;
            text-align: center;
        }
        span {
            margin-left: 47%;
        }
        .row-1 {
            background-color: green;
        }
        .row-2 {
            background-color: coral;
        }
        .row-3 {
            background-color: red;
        }
    </style>
</head>

<body>
<h1>Task_1</h1>
<!--
 1.  Напишите скрипт, выводящий таблицу из k случайных чисел с чередованием фона строк из 3 цветов – цвет1, цвет2, цвет3,
цвет1, цвет2, цвет3 и т.д.
 -->
<table>
    <caption>а) в один столбец</caption>
    <tr>
        <th>Номер</th>
        <th>Число</th>
    </tr>

    <?php
    $o=1;
    $rows_count=5;
    ?>
    <?php  for($i=1; $i<=$rows_count; $i++) { ?>
        <tr class="row-<?= $o ?>">
            <th>
                <?= $i ?>
            </th>
            <td>
                <?= rand(1, 50) ?>
            </td>
        </tr>
        <?php
        if ($o==3) {
            $o = 1;
        } else {
            $o+=1;
        }
        ?>
    <?php } ?>
    <!--
    Пример тернарного оператора
    $o = $o == 3 ? 1 : $o + 1
    -->
</table>
<table>
    <?php
    $new_o=1;
    $new_rows_count=5;
    $new_columns_count=4;
    ?>
    <caption>б) в n столбцов</caption>
    <tr>
        <th>Номер</th>
        <th colspan="<?= $new_columns_count ?>">Число</th>
    </tr>

    <?php  for($k=1; $k<=$new_rows_count; $k++) { ?>
        <tr class="row-<?= $new_o ?>">
            <th><?= $k ?></th>
            <?php for ($j=1; $j<=$new_columns_count; $j++){ ?>
                <td><?= rand(1, 50) ?></td>
            <?php } ?>
        </tr>
        <?php $new_o = $new_o == 3 ? 1 : $new_o + 1 ?>
    <?php } ?>
</table>

<h1>Task_2</h1>
<!--
Обеспечьте плавное изменение цвета шрифта k строк от черного к белому (первая строка – черный цвет, последняя строка – белый,
промежуточные – градации серого). Можно просто добавить к коду первого задания.
-->
<?php
$rows_total=200;
$r=0;
$r_max=250;
$step=$r_max/$rows_total;
?>
<?php for ($x=0; $x<=$rows_total; $x++) { ?>
        <span style="color: rgb(<?= round($r) ?>, <?= round($r) ?>, <?= round($r) ?>)">
            row<?= $x ?>
        </span><br>
        <?php $r = $x < $rows_total ? $r+=$step : $r_max ?>
<?php } ?>
</body>
</html>